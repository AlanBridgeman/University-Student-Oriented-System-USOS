<!-- 
  - Name: 
  - Description: 
  - Author: 
  - Date: 
  -->
<?php
	//Get other required php files
	require_once(__DIR__ . '\Database.class.php');
	
	//Start the session
	session_start();
	
	//Setup the database
	$host = "";
	$uid = "";
	$pwd = "";
	$dbName = "";
	$_SESSION['db'] = new Database($host, $uid, $pwd, $dbName);
	
	//Run the databhase setup script (SQL is "IF NOT EXISTS")
	//include_once(__DIR__ . '\Database_Setup.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Set the character encoding for the page -->
        <meta charset="UTF-8" />
        <!-- Set the meta data for the page -->
        <meta name="application-name" content="University of Manitoba Course Record System" />
        <meta name="author" content="Alan Bridgeman" />
        <!-- Set the title for the page -->
        <title>Univeristy Course Record System (UCRS)</title>
        <!-- Metadata for responsive web design -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <!-- Style the pages with external CSS files -->
		<link rel="stylesheet" type="text/css" href="includes/CSS/style.css" />
    </head>
    <body>
        <header>
			<img role="banner" src="includes/images/logo.jpg" alt="The website logo" />
			<div id="headerBar">
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="">Course Catelog</a></li>
						<li class="last"><a href="tutor.php">Tutor Registry</a></li>
					</ul>
				</nav>
				<div id="userNavi">
					<ul>
						<?php
						if(isset($_SESSION['user'])) {
							echo '<li>Hello ' . 'Admin' /*$_SESSION['user']->getDetail("name");*/ . '</li>';
							echo '<li><a id="passwordChange" href="">Change Password</a></li>';
							echo '<li class="last"><a href="logout.php">Logout</a></li>';
						}
						else {
						?>
						<li><a id="loginLink" href="">Log in</a></li>
						<li class="last"><a href="register.php">Register</a></li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>
			<?php
				include_once(__DIR__ . '\login.inc.php');
			?>
        </header>
        <main>
