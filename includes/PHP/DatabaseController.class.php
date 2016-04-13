<?php
require_once(__DIR__ . '/Database.class.php');
require_once(__DIR__ . '/QueryBuilder.class.php');

abstract class DatabaseController {
	private $db;
	private $builder;
	
	public function __construct() {
		$host = "";
		$uid = "";
		$pwd = "";
		$dbName = "";
		$this->db = new Database($host, $uid, $pwd, $dbName);
		$this->builder = new QueryBuilder();
	}
	
	public function insert($table, $field, $value) {
		if(!$this->builder->queryTypeSet()) {
			$this->builde->setQueryType("INSERT INTO");
		}
		
		if(strcmp($this->builder->getQueryType(), "INSERT INTO") == 0) {
			$this->builder->addValue($field, $value);
		}
	}
	
	public function update($table, $values, $conditions) {
		if(!$this->builder->queryTypeSet()) {
			$this->builder->setQueryType("UPDATE");
		}
		
		if(strcmp($this->builder->getQueryType(), "UPDATe") == 0) {
			$this->builder->addValue($field, $value);
			$this->builder->addCondition($field, $value);
		}
	}
	
	public function select($table, $fields, $conditions) {
		if(!$this->builder->queryTypeSet()) {
			$this->builder->setQueryType("SELECT");
			$this->builder->setTable($table);
		}
		
		if(strcmp($this->builder->getQueryType(), "SELECT") == 0) {
			foreach($fields as $field) {
				$this->builder->addField($field);
			}
			foreach($conditions as $cond) {
				$this->builder->addCondition(substr($cond, 0, strrpos($cond, "=")), substr($cond, strrpos($cond, "=") + 1));
			}
		}
	}
	
	public function execute() {
		$query = $this->builder->build();
		$result =  $this->db->run($query);
		return $result;
	}
}
?>