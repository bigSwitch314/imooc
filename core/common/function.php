<?php
function p($var)
{
	if (is_bool($var)) {
		var_dump($var);
	} elseif(is_null($var)) {
		var_dump(NULL);
	} else {
		echo "<pre style='position:relative;z-index:1000;padding:10px;border-radius:5px;background:#F5F5F5;border:1px solid #aaa;font-size:14px;line-height:18px;opacity:0.9;'>" . print_r($var, true) . "</pre>";
	}
}

/**
 * @param $name
 * @param bool|false $default
 * @param bool|false $fitt
 * @return bool
 */
function post($name, $default=false, $fitt=false){
	if(isset($_POST[$name])){
		if($fitt){
			switch($fitt){
				case 'int':
					if(is_numeric($_POST[$name])){
						return $_POST[$name];
					} else {
						return $default;
					}
					break;
				default: ;
			}
		} else {
			return $default;
		}
	} else {
		return $default;
	}
}

/**
 * @param $url
 */
function jump($url){
	header('location:'.$url);
	exit;
}
