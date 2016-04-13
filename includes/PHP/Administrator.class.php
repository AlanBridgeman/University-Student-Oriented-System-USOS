<?php
require_once(__DIR__ . '/AdministratorDBController.class.php');

class Administrator {
	private $id;
	private $dbController;
	
	public function __construct($id) {
		$this->id = $id;
		$this->dbController = new AdministratorDBController();
	}
	
	public function addStudent($student) {
		$this->dbController->addStudent($student);
	}
	public function addProfessor($professor) {
		$this->dbController->addProfessor($professor);
	}
	public function addCourse($course) {
		$this->dbController->addCourse($course);
	}
	
	public function removeStudent($student) {
		$this->dbController->removeStudent($student);
	}
	public function removeProfessor($professor) {
		$this->dbController->removeProfessor($professor);
	}
	public function removeCourse($course) {
		$this->dbController->removeCourse($course);
	}
	public function registerStudent($student, $course) {
		$this->dbController->registerStudent($student, $course);
	}
	public function assignProfessor($professor, $course) {
		$this->dbController->assignProfessor($professor, $course);
	}
	public function deregisterStudent($student, $course) {
		$this->dbController->deregisterStudent($student, $course);
	}
	
	public function changePassword($newPassword) {
		$this->dbController->changeDetial($id, 'password', $newPassword);
	}
	
	public function getPage() {
		return 'Admin.php';
	}
}
?>