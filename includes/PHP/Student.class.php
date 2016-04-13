<?php
require_once(__DIR__ . '/StudentDBController.class.php');
class Student {
	private $id;
	private $dbController;
	
	public function __construct($id) {
		$this->id = $id;
		$this->dbController = new StudentDBController();
	}
	
	public function takeCourse($course) {
		$this->dbController->addToCourse($this->id, $course);
	}
	
	public function dropCourse($course) {
		$this->dbController->removeFromCourse($this->id, $course);
	}
	
	public function changePassword($newPassword) {
		$this->dbController->changeDetail($this->id, 'password', $newPassword);
	}
}
?>