<?php
class QueryBuilder {
	private $queryTypes;
	private $query;
	
	private $table;
	private $type;
	private $fields;
	private $values;
	private $conditions;
	
	public function __construct() {
		$this->queryTypes = 
			array (
				"INSERT INTO" => "INSERT INTO [table]([fields]) VALUES ([values])",
				"SELECT" => "SELECT [fields] FROM [table] WHERE [conditions]",
				"UPDATE" => "UPDATE [table] SET [values] WHERE [conditions]",
				"DELETE" => "DELETE FROM [table]  WHERE [conditions]"
			);
		$this->query = NULL;
		
		$this->table = NULL;
		$this->type = NULL;
		$this->fields = array();
		$this->values = array();
		$this->conditions = array();
	}
	
	public function setQueryType($type) {
		$this->type = $type;
	}
	public function getQueryType() {
		return $this->type;
	}
	public function queryTypeSet() {
		return (isset($this->type) && !empty($this->type));
	}
	
	public function setTable($table) {
		$this->table = $table;
	}
	
	public function addField($field) {
		if(count($this->fields) + 1 > 1) {
			$this->fields[0] = "(" . $this->fields[0];
			$field = $field . ")";
		}
		array_push($this->fields, $field);
	}
	public function removeField($field) {
		$this->fields = array_diff($this->fields, array("'" . $field . "'"));
	}
	
	public function addValue($field, $value) {
		array_push($this->values, "'" . $field . "'='" . $value . "'");
	}
	public function removeValue($field, $value) {
		$this->values = array_diff($this->values, array("'" . $field . "'='" . $value . "'"));
	}
	
	public function addCondition($field, $value) {
		array_push($this->conditions, $field . "=" . $value . "");
	}
	public function removeCondition($field, $value) {
		$this->conditions = array_diff($this->conditions, array("'" . $field . "'='" . $value . "'"));
	}
	
	public function build() {
		foreach ($this->queryTypes as $key => $value) {
			if(strcmp($this->type,$key) == 0) {
				$this->query = $value;
			}
		}
		
		if($this->query == NULL) {
			echo 'Error: There was a problem while building your query';
			return NULL;
		}
		
		$fieldsStr = '';
		foreach($this->fields as $field) {
			$fieldsStr .= $field;
		}
		$valuesStr = '';
		foreach($this->values as $value) {
			$valuesStr .= $value;
		}
		$conditionsStr = "";
		foreach($this->conditions as $cond) {
			$conditionsStr .= $cond;
		}
		
		$this->query = str_replace("[table]", $this->table, $this->query);
		$this->query = str_replace("[fields]", $fieldsStr, $this->query);
		$this->query = str_replace("[values]", $valuesStr, $this->query);
		$this->query = str_replace("[conditions]", $conditionsStr, $this->query);
		
		$this->table = NULL;
		$this->type = NULL;
		$this->fields = array();
		$this->values = array();
		$this->conditions = array();
		
		return $this->query;
	}
	
	public function getLastQuery() {
		return $this->query;
	}
}
?>