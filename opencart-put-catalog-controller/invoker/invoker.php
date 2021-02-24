<?php
require_once 'ErkinController.php';

class ControllerInvokerInvoker extends ErkinController
{

    public function __construct($registry)
    {
        parent::__construct($registry);
    }

    public function index()
    {
        $this->jsonSuccess('ok');
    }

    public function info()
    {
        try {
            $userConstants = get_defined_constants(true)['user'];
        } catch (Exception $e) {
            $userConstants = null;
        }

        try {
            $dbVariables = $this->db->query('SHOW VARIABLES;')->rows;
            $dbVariables = Utils::array_make_key_value_pair($dbVariables, 'Variable_name', 'Value');
        } catch (Exception $e) {
            $dbVariables = null;
        }

        $this->jsonSuccess([
            'opencart' => [
                'version' => VERSION,
            ],
            'host' => [
                'ip' => getHostByName(getHostName()),
                'name' => getHostName(),
            ],
            'php' => [
                'version' => PHP_VERSION,
                'constants' => $userConstants,
                'config' => ini_get_all(null, false)
            ],
            'db' => $dbVariables
        ]);
    }

    public function models()
    {
        $models = $this->getModels();
        foreach ($models as &$model) {
            $model['methods'] = $this->getModelMethods($model['name']);
        }
        $this->jsonSuccess($models);
    }

    public function adminmodels()
    {
        $models = $this->getModels(true);
        foreach ($models as &$model) {
            $model['methods'] = $this->getModelMethods($model['name'], true);
        }
        $this->jsonSuccess($models);
    }

    public function methods()
    {
        if (!array_key_exists('model', $this->request->request)) {
            $this->jsonSuccess('Error: model parametresi gerekli');
            die;
        }

        $modelName = $this->request->request['model'];
        $isAdmin = array_key_exists('isAdmin', $this->request->request) && boolval($this->request->request['isAdmin']);

        $methods = $this->getModelMethods($modelName, $isAdmin);
        $this->jsonSuccess($methods);
    }

    public function invoke()
    {
        $modelName = $this->request->request['model'];
        $methodname = $this->request->request['method'];
        $args = $this->request->request['args'];
        $isAdmin = boolval($this->request->request['isAdmin']);

        $args = $args ?: [];

        return $this->afterLoadModel($modelName, function ($model) use ($args, $methodname) {
            $this->jsonSuccess(call_user_func_array(array($model, $methodname), $args));
        }, $isAdmin);
    }

//    public function generateAllModelsCode()
//    {
//        $code = <<<EOT
//<?php
//
//use OpencartApi\Models\BaseModel;
//use OpencartApi\Http\ApiResponse;
//
//EOT;
//
//        echo $code;
//        echo $this->generateModelCodes();
//        echo $this->generateModelCodes(true);
//    }

    public function generateAllModelMetaData()
    {
        $this->jsonSuccess(array_merge($this->generateModelMetaData(), $this->generateModelMetaData(true)));
    }


}