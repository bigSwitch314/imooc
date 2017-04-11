<?php

namespace core;

class imooc
{
	public static $classMap = array();
	public $assign;
	static public function run() {

        \core\lib\log::init();
        \core\lib\log::log('test');
        \core\lib\log::log($_SERVER, 'server');

		$route = new \core\lib\route(); 
		$controllerClass = $route->controller;
		$action = $route->action;

		$controllerFile = APP.'/controller/'.$controllerClass.'Controller.php';
		$controllerClass = '\\'.MODULE.'\controller\\'.$controllerClass.'Controller';
		if (is_file($controllerFile)) {
			require $controllerFile;
			$controller = new $controllerClass();
			$controller->$action();

			\core\lib\log::log('controller:'.$controllerClass.'  '.'action:'.$action, 'ctrl');

		} else {
			throw new \Exception('找不到控制器'.$controllerClass);
			
		}
	}

	static public function load($class) {
		if (isset($classMap[$class])) {
			return true;
		} else {
			$class = str_replace('\\', '/', $class);
			$file = IMOOC.'/'.$class.'.php';
		    if (is_file($file)) {
			    require $file;
			    self::$classMap[$class] = $class;
		    } else {
			    return false;
		    }
		}
		
	}

	public function assign($name, $value){
        $this->assign[$name] = $value;
	}

	public function display($file){
		$file = APP.'/view/'.$file;
		if (is_file($file)) {
			extract($this->assign);
			require $file;
		}
	}


}
