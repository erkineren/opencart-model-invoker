<?php
error_reporting(E_ALL);
require 'Utils.php';

/**
 * Class ErkinController
 *
 * @property Model admin_model_catalog_product
 * @property Model admin_model_catalog_category
 * @property Model admin_model_catalog_option
 * @property Model admin_model_catalog_manufacturer
 *
 * @property Loader $load
 * @property Response $response
 * @property Request $request
 * @property DB $db
 */
abstract class ErkinController extends Controller
{
    const ADMIN_AREA = 'admin';

    /**
     * @var array
     */
    protected $error = [];

    /**
     * @var string
     */
    protected $path;

    /**
     * @var string|string[]|null
     */
    protected $adminPath;

    /**
     * @var \Cart\User
     */
    protected $user;

    public function __construct($registry)
    {
        parent::__construct($registry);
        $that = $this;
        set_error_handler(function ($errno, $errstr, $errfile, $errline) use ($that) {
            if ($errno != E_USER_ERROR) return;
            $error = "Handled Error: [$errno] $errstr Error on line $errline in $errfile";
            $that->jsonError($errstr, $error)->output();
            die;
        });
        $this->path = DIR_APPLICATION . 'model/';
        $this->adminPath = preg_replace('/(.+\/)(catalog)\//i', "$1" . self::ADMIN_AREA . '/model/', DIR_APPLICATION);
        $this->checkAuth();
    }

    public function __get($key)
    {
        if (strpos($key, 'admin_model_') === 0) {
            $modelName = implode('/', explode('_', str_replace('admin_model_', '', $key)));
            return $this->loadModel($modelName);
        } else {
            return parent::__get($key);
        }

    }

    protected function isPost()
    {
        return $this->request->server['REQUEST_METHOD'] == 'POST';
    }

    protected function json($result, $status = true, $message = '')
    {
        $data = [
            'status' => $status,
            'message' => $message,
            'result' => $result,
        ];
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

        return $this->response;
    }

    protected function jsonSuccess($result, $message = '')
    {
        return $this->json($result, true, $message);
    }

    protected function jsonError($message, $result = '')
    {
        return $this->json($result, false, $message);
    }

    protected function validate()
    {

        $this->load->language('account/login');
        $this->user = new \Cart\User($this->registry);
        $post = $this->request->post;

        if (!($loginData = $this->parseCredentials())) {
            $this->error['warning'] = $this->language->get('error_login');
        }
        return !$this->error;
    }

    protected function parseCredentials()
    {
        if (!$this->request->server['HTTP_AUTH']) return false;

        if (!($credentials = base64_decode($this->request->server['HTTP_AUTH']))) return false;
        list($username, $password) = explode(':', $credentials);
        return [
            'username' => $username,
            'password' => $password
        ];
    }

    protected function checkAuth()
    {
        if (!$this->validate()) {
            $this->jsonSuccess($this->error)->output();
            die;
        }
    }

    protected function afterLoadModel($modelName, callable $callable, $isAdmin = false)
    {
        if ($model = $this->loadModel($modelName, $isAdmin)) {
            return $callable($model);
        }
//        $this->triggerError('Not found ' . $modelName);
        return $model;
    }

    protected function loadModel($modelName, $isAdmin = false, $ignoreError = false)
    {
        $path = $isAdmin ? $this->adminPath : $this->path;
        $modelfile = $path . $modelName . '.php';
        $class = $this->convertModelNameToClassName($modelName);
        if (!file_exists($modelfile)) {
            $this->triggerError("Model not exists: $modelfile, isAdmin: " . intval($isAdmin));
        }

        if (!class_exists($class))
            include_once $modelfile;
        $model = new $class($this->registry);
        if ($modelfile != Utils::getClassFilename($model)) {
            $this->error[] = "Bu model ($class) kullanılmaz";
            return false;
        }
        return $model;
    }

    protected function convertModelNameToClassName($modelName)
    {
        if (strpos($modelName, 'Model') === 0 && strpos($modelName, '/') === false) return $modelName;
        return 'Model' . implode('', array_map('ucfirst', explode('/', str_replace("_", "/", $modelName))));
    }

    protected function getModels($isAdmin = false)
    {
        $path = $isAdmin ? $this->adminPath : $this->path;
        $models = [];
        foreach ($this->searchPhpFiles($path) as $modelPath) {
            $modelName = str_replace($path, '', $modelPath);
            $modelName = substr($modelName, 0, (strrpos($modelName, ".")));

            $models[] = [
                'name' => $modelName,
                'class' => $this->convertModelNameToClassName($modelName),
                'path' => $modelPath
            ];
        };
        return $models;
    }

    protected function getModelMethods($modelName, $isAdmin = false)
    {
        return $this->afterLoadModel($modelName, function ($model) {

            $methods = [];
            try {
                $reflection = new ReflectionClass($model);
                $content = file_get_contents($reflection->getFileName());
                preg_match_all("#public function (\w+\(.*\))#", $content, $matches);

                $i = 0;
                foreach ($reflection->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {

                    if ($method->isPublic() && !$method->isStatic() && !$method->isConstructor() &&
                        strpos($method->getName(), '__') === false) {

                        $params = [];
                        foreach ($method->getParameters() as $parameter) {
                            $params[] = [
                                'name' => $parameter->getName(),
                                'optional' => $parameter->isOptional(),
                                'default' => $parameter->isOptional() ? $parameter->getDefaultValue() : ''
                            ];
                        }

                        $methods[] = [
                            'signature' => $matches[1][$i],
                            'filename' => $reflection->getFileName(),
                            'name' => $method->getName(),
                            'requiredParams' => $method->getNumberOfRequiredParameters(),
                            'params' => $params
                        ];
                    }
                    $i++;
                }
            } catch (ReflectionException $e) {
                $this->triggerError('ReflectionException:' . $e->getMessage());
            } catch (Exception $t) {
                $this->triggerError('Error:' . $t->getMessage());
            }
            return $methods;
        }, $isAdmin);
    }

    protected function searchPhpFiles($directory)
    {
        return Utils::recursiveSearchFiles($directory, '#.+\.php$#');
    }

    protected function getDeclaredModelClasses()
    {
        $declaredModels = [];
        $needle = 'Model';
        foreach (get_declared_classes() as $declared_class) {
            if (strpos($declared_class, $needle) === 0 && strlen($declared_class) > strlen($needle)) $declaredModels[] = $declared_class;
        }
        return $declaredModels;
    }

    protected function triggerError($msg)
    {
        trigger_error($msg, E_USER_ERROR);
    }

//    protected function generateModelCodes($isAdmin = false)
//    {
//        $codes = [];
//        foreach ($this->getModels($isAdmin) as $model) {
//            $matches = [];
//            $content = file_get_contents($model['path']);
//            preg_match_all("#public function (\w+\(.*\))#", $content, $matches);
//
//            foreach ($matches[1] as &$match) {
//                $match = " * @method ApiResponse $match";
//            }
//            $methods = implode(PHP_EOL, $matches[1]);
//
//            $constIsAdmin = '';
//            $className = $model['class'];
//            if ($isAdmin) {
//                $className = "Admin$className";
//                $constIsAdmin = 'const IS_ADMIN = true;';
//            }
//
//            $codes[] = <<<EOT
///**
//$methods
// */
//class {$className} extends BaseModel
//{
//    const MODEL_NAME = '{$model['name']}';
//    $constIsAdmin
//}
//
//
//EOT;
//        }
//
//        return implode(PHP_EOL . PHP_EOL, $codes);
//    }


    protected function generateModelMetaData($isAdmin = false)
    {
        $meta = [];
        foreach ($this->getModels($isAdmin) as $model) {
            $matches = [];
            $content = file_get_contents($model['path']);
            preg_match_all("#public function (\w+\(.*\))#", $content, $matches);

            $className = $model['class'];
            if ($isAdmin) {
                $className = "Admin$className";
            }
            $meta[] = [
                'className' => $className,
                'slug' => $model['name'],
                'admin' => $isAdmin,
                'methodSignatures' => $matches[1],
                'methods' => $this->getModelMethods($model['name'], $isAdmin)
            ];

        }

        return $meta;
    }

}