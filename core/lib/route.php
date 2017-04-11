<?php

namespace core\lib;
use core\lib\conf;

class route 
{
	public $controller;
	public $action;
	public function __construct() {
		if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] !='/') {
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('/', trim($path, '/' ));
            if (isset($patharr[0])) {
            	$this->controller = $patharr[0];
            }
            unset($patharr[0]);
            if (isset($patharr[1])) {
            	$this->action = $patharr[1];
            	unset($patharr[1]);
            } else {
            	$this->action = conf::get('action', 'route');
            }

            //获取参数
            $count = count($patharr)+2;
            $i = 2;
            while($i<$count) {
            	if (isset($patharr[$i+1])) {
            		$_GET[$patharr[$i]] = $patharr[$i+1];
            	}
            	$i = $i + 2;
            }

		} else {
			$this->controller = conf::get('controller', 'route');
			$this->action = conf::get('action', 'route');
		}
	}
}
