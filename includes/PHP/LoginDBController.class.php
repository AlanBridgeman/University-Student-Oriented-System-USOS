<?php
require_once(__DIR__ . '/DatabaseController.class.php');

class LoginDBController extends DatabaseController {
	
	public function userExists($type, $id) {
		parent::select('bridgema_' . strtolower(substr($type, 0, 1)) . substr($type, 1), array('*'), array(strtolower(substr($type, 0, 1)) . 'ID=' . $id));
		$result = parent::execute();
		return (isset($result) && !empty($result));
	}
	
	public function checkPassword($type, $id, $password) {
		parent::select('bridgema_' . strtolower(substr($type, 0, 1)) . substr($type, 1), array('password'), array(strtolower(substr($type, 0, 1)) . 'ID=' . $id));
		$actualPassword = parent::execute();
		$row = $actualPassword->fetch_array(MYSQLI_NUM);
		return password_verify($password, $row[0]);
	}
}
?>