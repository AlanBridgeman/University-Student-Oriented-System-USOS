<?php
require_once(__DIR__ . '/ProfessorDBController.class.php');

class Professor {
	private $id;
	private $dbController;
	
	public function __construct($id) {
		$this->id = $id;
		$this->dbController = new ProfessorDBController();
	}
	
	public function teachCourse($course) {
		$this->dbController->teachCourse($this->id, $course);
	}
	
	public function changeCourseDetail($course, $detail, $value) {
		//Check if id teaches course
		
		$this->changeCourseDetail($course,$detail,$value);
	}
	
	public function changePassword($newPassword) {
		$this->changeDetail($this->id, 'password', $newPassword);
	}
}
?>