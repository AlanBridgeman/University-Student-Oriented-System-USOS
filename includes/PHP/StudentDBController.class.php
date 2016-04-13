<?php
require_once(__DIR__ . '/DatabaseController.class.php');

class StudentDBController extends DatabaseController {
	public function __construct() {
		
	}
	
	public function addToCourse($sID, $course) {
		parent::insert('bridgema_Registration', 'sID', $sID);
		parent::insert('bridgema_Registration', 'cID', $course);
		parent::execute();
	}
	
	public function removeFromCourse($sID, $course) {
		parent::remove('bridgema_Registration','sID=' . $sID . ',cID=' . $course);
	}
	
	public function changeDetail($sID, $detail, $value) {
		parent::update('bridgema_student', $detail . '=' . $value, 'sID=' . $sID);
	}
}
?>