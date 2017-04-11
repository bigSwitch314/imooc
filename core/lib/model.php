<?php
namespace core\lib;
use core\lib\conf;

class model extends \PDO
{
	public function __construct(){
		$database = conf::all('database');
		try {
			parent::__construct($database['dsn'], $database['username'], $database['passwd']);
		} catch(\PDOException $e) {
            p($e->getMessage());
		}
		
	}
}