<?php
require_once(__DIR__ . '/DatabaseController.class.php');

class AdministratorDBController extends DatabaseController {
	public function __construct() {
		
	}
	
	public function addStudent($student) {
		$this->insert('','','');
	}
	public function addProfessor($professor) {
		$this->insert('','','');
	}
	public function addCourse($course) {
		$this->insert('', '', '');
	}
	
	public function removeStudent($student) {
		$this->remove('','','');
	}
	public function removeProfessor($professor) {
		$this->remove('','','');
	}
	public function removeCourse($course) {
		$this->remove('','','');
	}
	public function registerStudent($student, $course) {
		$this->insert('','','');
	}
	public function assignProfessor($professor, $course) {
		$this->update('','','');
	}
	public function deregisterStudent($student, $course) {
		$this->remove('','','');
	}
	
	public function changeDetail($aID, $detail, $value) {
		$this->update('','','');
	}
}
?>