<?php

namespace model;

class DataBase{
	
	public static function conn(){
			include "config-db.php";

			$login    = $config['user'];
			$senha    = $config['pass'] ;
			$database = $config['database'];
			$host     = $config['host'];

	        $conn = new \PDO("mysql:host={$host};dbname={$database};charset=utf8", $login, $senha, [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET @@global.time_zone = '-3:00'"]);
		return $conn;
	}

}