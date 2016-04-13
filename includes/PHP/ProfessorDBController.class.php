<?php
require_once(__DIR__ . '/DatabaseController.class.php');

class ProfessorDBController extends DatabaseController {
	public function __construct() {
		
	}
	
	public function teachCourse($pID, $course) {
		$this->insert('', '', '');
	}
	
	public function changeCourseDetail($course, $detail, $value) {
		$this->update('','','');
	}
	
	public function changeDetail($pID, $detail, $value) {
		$this->update('','','');
	}
}
?>