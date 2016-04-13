<?php
require_once(__DIR__ . '/LoginDBController.class.php');

class LoginChecker {
	private $dbController;
	private $userType;
	private $valid;
	private $error;
	
	public function __construct($type) {
		$this->userType = $type;
	}
	
	public function validate($id, $password) {
		$this->dbController = new LoginDBController();
		$exists = $this->dbController->userExists($this->userType, $id);
		if($exists) {
			$authenticate = $this->dbController->checkPassword($this->userType, $id, $password);
			if($authenticate) {
				$this->valid = TRUE;
			}
			else {
				$this->valid = FALSE;
				$this->error = "Incorrect password";
			}
		}
		else {
			$this->valid = FALSE;
			$this->error = "The user doesn't exist";
		}
	}
	
	public function failed() {
		return !$this->valid;
	}
	
	public function getError() {
		return $this->error;
	}
}
?>