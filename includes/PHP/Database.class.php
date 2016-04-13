<?php
class Database {
    private $db;
    
    private $host;
    private $uid;
    private $pwd;
    private $dbName;
    
    public function __construct($host, $uid, $pwd, $dbName) {
		$this->host = $host;
		$this->uid = $uid;
		$this->pwd = $pwd;
		$this->dbName = $dbName;
        
		$this->db = new mysqli();
		$this->db->connect($host, $uid, $pwd, $dbName);
		if($this->db->connect_errno) {
			printf("Error: %s \n", $this->db->connect_error);
		}
    }
	
	public function run($sql) {
		$result = $this->db->query($sql);
		if($this->db->errno) {
			printf("Error: %s \n", $this->db->error);
		}
		
		return $result;
	}
}
?>