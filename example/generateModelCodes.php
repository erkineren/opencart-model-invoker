<?php

require_once __DIR__ . '/common.php';

//$invoker = $invokerv2302;
//$invoker = $invokerv3020;
$invoker = $invokerv3037;

$info = $invoker->getInfo()->getResult();
$ocVersion = trim(str_replace('.', '', $info['opencart']['version']));
if (!$ocVersion || !is_numeric($ocVersion)) {
    die("Opencart version could not fetched. ($ocVersion)");
}

$version = 'v' . $ocVersion;

$metaData = $invoker->generateAllModelMetaData()->getResult();

$codes = [];
$traitMethods = [];
foreach ($metaData as $class) {

    foreach ($class['methodSignatures'] as &$match) {
        $match = " * @method ApiResponse $match";
    }
    $methods = implode(PHP_EOL, $class['methodSignatures']);

    $constIsAdmin = '';
    $className = $class['className'];
    if ($class['admin']) {
        $constIsAdmin = 'const IS_ADMIN = true;';
        if (strpos($className, 'Admin') !== 0) {
            $className = "Admin$className";
        }
    }


    $traitMethods[] = " * @method \\OpencartApi\\Models\\$version\\$className get$className";

    $codes[$className] = <<<EOT
<?php

namespace OpencartApi\Models\\$version;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
$methods
 */
class {$className} extends BaseModel
{
    const MODEL_NAME = '{$class['slug']}';
    $constIsAdmin
}


EOT;

}

$traitMethodsStr = implode(PHP_EOL, $traitMethods);
$traitCode = <<<EOL
<?php


namespace OpencartApi\ModelContainer\\$version;


use OpencartApi\Base\BaseModel;

/**
 * Trait OpencartModelsTrait
 *
{$traitMethodsStr}
 */
trait OpencartModelsTrait
{
    
}
EOL;

$baseDir = dirname(__DIR__);

@mkdir("$baseDir/src/ModelContainer/$version", 0755, true);
file_put_contents("$baseDir/src/ModelContainer/$version/OpencartModelsTrait.php", $traitCode);
file_put_contents("$baseDir/src/ModelContainer/$version/OpencartModelContainer.php", '<?php


namespace OpencartApi\\ModelContainer\\' . $version . ';


use OpencartApi\\Base\\BaseOpencartModelContainer;

class OpencartModelContainer extends BaseOpencartModelContainer
{
    use OpencartModelsTrait;
    
    protected static $VERSION = "' . $version . '";
}');

@mkdir("$baseDir/src/Models/$version", 0755, true);
foreach ($codes as $className => $code) {
    file_put_contents("$baseDir/src/Models/$version/$className.php", $code);
}


echo 'ok';