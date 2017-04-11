<?php
namespace core\lib\drive\log;
use \core\lib\conf;

class file 
{
	public $path;//日志存储位置
	public function __construct(){
		$path = conf::get('option', 'log');
		$this->path=$path['path'];
	}
	public function log($message, $file = 'log'){
		/**
		 * 1.确定存储位置是否存在
		 * 新建目录
		 * 2.写入日志
		 */
		if(!is_dir($this->path.date('Ym'))){
			mkdir($this->path.date('Ym'), 0777, true);
		}
		return file_put_contents($this->path.date('Ym').'/'.$file.'.php', date('Y-m-d H:i:s').json_encode($message).PHP_EOL, FILE_APPEND);
	}
}
//文件系统