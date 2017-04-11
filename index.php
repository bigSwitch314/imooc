<?php
/**
 *入口文件
 *1.定义常量
 *2.加载函数库
 *3.启动框架 
 */

define('IMOOC', __DIR__); 
define('CORE', IMOOC.'/core');
define('APP', IMOOC.'/app');
define('MODULE', 'app');
define('DEBUG', true);

require 'vendor/autoload.php';

if(DEBUG) {
	$whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
	ini_set('display_errors', 'On');
} else {
	ini_set('display_errors', 'Off');
}

require CORE.'/common/function.php';

require CORE.'/imooc.php';

spl_autoload_register('\core\imooc::load');

\core\imooc::run();


