<?php
namespace model;

class Model{
	protected $table;
	protected $conn;
	protected $query;
	protected $result;
	protected $id;

	public  function all(){
		$this->setQuery( $this->getConn()->prepare(" SELECT * FROM {$this->table} ") );
		return $this->get();
	}

	public function where(Array $param){

		if (isset($param[2])) {
			$condition = $param[0] . $param[1] . $param[2];
		}else{
			$condition = $param[0] . '=' . $param[1];
		}
		$this->setQuery( $this->getConn()->prepare(" SELECT * FROM {$this->table} WHERE {$condition} ") );
		return $this;
	}

	public function find($id){
		$this->setQuery( $this->getConn()->prepare(" SELECT * FROM {$this->table} WHERE id = {$id} ") );
		return $this->get();
	}

	public  function get(){
		$this->getQuery()->execute();
		$this->setResult( $this->getQuery()->fetchAll(\PDO::FETCH_OBJ) );
		return $this->getResult();
	}

	// public function foreign($obj, Array $param){
	// 	$this->setQuery( $this->prepare(" SELECT t1.* FROM {$obj->table}  AS t1 INNER JOIN {$this->table} AS t2 ON({$this->id} = t2.user_id) ") );
	// }	
	
	// public  function insert(Array $param){
	// 	$arr = '';
	// 	foreach ($param as $key => $value) {
	// 		$arr .= ' :'.$key;
	// 		$query[':'.$key] = $value;
	// 	}

	// 	$this->setQuery( $this->getConn()->prepare(" INSERT INTO {$this->table} VALUES( {$arr} ) ") );
	// 	$this->getQuery()->execute($query);
	// 	return $query;
	// }

	private function setConn(){
		include "config-db.php";
        $conn = new \PDO("mysql:host={$config['host']};dbname={$config['database']};charset=utf8", $config['user'], $config['pass'], [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET @@global.time_zone = '-3:00'"]);

		return $conn;
	}

	private function getConn(){
		return $this->conn;
	}

	private function setQuery($query){
		$this->query = $query;
		return $this;
	}

	private function getQuery(){
		return $this->query;
	}

	private function setResult($result){
		$this->result = $result;
		return $this;
	}

	private function getResult(){
		return $this->result;
	}

	function __construct(){

		$this->conn = $this->setConn();
		
	}

}