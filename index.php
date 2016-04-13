<?php
    require_once('./includes/PHP/header.inc.php');
?>
			<h1 role="heading" aria-level="1">Welcome</h1>
			<p>
			&nbsp;&nbsp;&nbsp;&nbsp;Welcome to the University Course Record System (UCRS) 
			</p>
            <form action="includes/PHP/form.php" method="post">
                <fieldset>
					<legend>Student Info</legend>
                    <label id="numberLabel" for="studentNumber">Student Number</label>
                    <input id="studentNumber" name="studentNumber" type="number" aria-labelledby="numberLabel" />
					<br />
					<label id="nameLabel" for="studentName">Student Name</label>
					<input id="studentName" name="studentName" type="text" />
                </fieldset>
                <input type="submit" value="Done" />
                <input type="reset" value="Cancel" />
            </form>
<?php
    require_once('./includes/PHP/footer.inc.php');
?>