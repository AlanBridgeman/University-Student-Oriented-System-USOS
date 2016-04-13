<?php
session_start();

require_once(__DIR__ . '/LoginChecker.class.php');
require_once(__DIR__ . '/Student.class.php');
require_once(__DIR__ . '/Administrator.class.php');
require_once(__DIR__ . '/Professor.class.php');

//Check if the login fields are set
if((isset($_POST['ID']) && !empty($_POST['ID'])) && (isset($_POST['password']) && !empty($_POST['password']))) {
	if($_POST['ID'] > 800000) {
		$checker = new LoginChecker("Student");
		$checker->validate($_POST['ID'], $_POST['password']);
		if(!$checker->failed()) {
			$_SESSION['user'] = new Student($_POST['id']);
		}
		else {
			echo 'Error: ' . $checker->getError();
		}
	}
	else {
		if(strcmp($_POST['ID'],"admin") == 0) {
			$checker = new LoginChecker("Administrator");
			$checker->validate(1, $_POST['password']);
			if(!$checker->failed()) {
				$_SESSION['user'] = new Administrator('1');
			}
			else {
				echo 'Error: ' . $checker->getError();
			}
		}
		else {
			$checker = new LoginChecker("Professor");
			$checker->validate($_POST['ID'], $_POST['password']);
			if(!$checker->failed()) {
				$_SESSION['user'] = new Professor($_POST['id']);
			}
			else {
				echo 'Error: ' . $checker->getError();
			}
		}
	}
	
	if(isset($_SESSION['user'])) {
		echo $_SESSION['user']->getPage();
	}
}
else {
	echo "Must provide both a name and number to proceed.";
}
?>