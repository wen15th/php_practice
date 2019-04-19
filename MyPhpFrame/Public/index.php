<?php
/**
 * 入口文件
 * User: wen15th
 * Date: 2019/4/16
 * Time: 9:50 PM
 */

define('APP_PATH', __DIR__);
define('APP_ROOT', dirname(__DIR__));

//注册自动加载类
require '../AutoLoad.php';
spl_autoload_register(['AutoLoad', 'loadClass'], true, true);

//路由类
require '../Route.php';
$route = new Route();
$class = $route->getClassName();
$method = $route->getMethod();

//$app = new \MyPhp\Core();
$app = new $class();
return $app->$method();