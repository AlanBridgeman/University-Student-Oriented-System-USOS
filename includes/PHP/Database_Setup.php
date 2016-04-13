<?php
$SQL_CREATE_STUDENT = ""
	. "CREATE TABLE IF NOT EXISTS bridgema_Student (								"
	. "		sID int(11) PRIMARY KEY AUTO_INCREMENT,									"
	. "		fName varchar(255) NOT NULL,											" 
	. "		lName varchar(255) NOT NULL,											"
	. "		password varchar(255) UNIQUE NOT NULL,									"
	. "		CONSTRAINT name UNIQUE (fName,lName)									"
	. ")ENGINE=InnoDB;																";
$SQL_CREATE_COURSE = ""
	. "CREATE TABLE IF NOT EXISTS bridgema_Course (									" 
	. "		cID int(11) PRIMARY KEY AUTO_INCREMENT,									" 
	. "		name varchar(255) UNIQUE,												"	
	. "		descrip text,															" 
	. "		start date NOT NULL,													" 
	. "		end date NOT NULL														"
	. ")ENGINE=InnoDB;																";
$SQL_CREATE_PROFESSOR = ""
	. "CREATE TABLE IF NOT EXISTS bridgema_Professor (								"
	. "		pID int(11) PRIMARY KEY AUTO_INCREMENT,									"
	. "		fName varchar(255) NOT NULL,											"
	. "		lName varchar(255) NOT NULL,											"
	. "		password varchar(255) UNIQUE NOT NULL,									"
	. "		CONSTRAINT name UNIQUE (fName,lName)									"
	. ")ENGINE=InnoDB;																";
$SQL_CREATE_ADMINISTRATORS = ""
	. "CREATE TABLE IF NOT EXISTS bridgema_Administrator (							"
	. "		aID int(11) PRIMARY KEY AUTO_INCREMENT,									"
	. "		fName varchar(255) NOT NULL,											" 
	. "		lName varchar(255) NOT NULL,											"
	. "		password varchar(255) UNIQUE NOT NULL,									"
	. "		CONSTRAINT name UNIQUE (fName,lName)									"
	. ")ENGINE=InnoDB;																";
$SQL_CREATE_REGISTRATION = ""
	. "CREATE TABLE IF NOT EXISTS bridgema_Registration (							"
	. "		cID int(11) NOT NULL,													"
	. "		sID int(11) NOT NULL,													"
	. "		grade char(1) NOT NULL,													"
	. "		comments varchar(255),													"
	. "		PRIMARY KEY (cID,sID),													"
	. "		FOREIGN KEY (cID) REFERENCES bridgema_Course(cID) ON DELETE CASCADE,	"
	. "		FOREIGN KEY (sID) REFERENCES bridgema_Student(sID)						"
	. ")ENGINE=InnoDB;																";
$SQL_CREATE_TEACHING = ""
	. "CREATE TABLE IF NOT EXISTS bridgema_Teaching (								"
		. "cID int(11) NOT NULL,													"
		. "pID int(11) NOT NULL,													"
		. "PRIMARY KEY (cID,pID),													"
		. "FOREIGN KEY (cID) REFERENCES bridgema_Course(cID) ON DELETE CASCADE,		"
		. "FOREIGN KEY (pID) REFERENCES bridgema_Professor(pID)						"
	. ")ENGINE=InnoDB;																";

$_SESSION['db']->run($SQL_CREATE_STUDENT);
$_SESSION['db']->run($SQL_CREATE_COURSE);
$_SESSION['db']->run($SQL_CREATE_PROFESSOR);
$_SESSION['db']->run($SQL_CREATE_ADMINISTRATORS);
$_SESSION['db']->run($SQL_CREATE_REGISTRATION);
$_SESSION['db']->run($SQL_CREATE_TEACHING);

$SQL_ADD_ADMIN = "INSERT IGNORE INTO bridgema_Administrator VALUES (0,'Administrator','1','" . password_hash('admin', PASSWORD_DEFAULT) . "');";

$_SESSION['db']->run($SQL_ADD_ADMIN);
?>