<?php
    require_once('./includes/PHP/header.inc.php');
?>
            <form action="includes/PHP/register_form.php" method="post">
                <label>Student Name</label>
                <input id="sName" name="sName" type="text" />
				<br />
				<label>Course Name</label>
				<input id="cName" name="cName" type="text" />
                <input type="submit" value="Done" />
                <input type="reset" />
            </form>
<?php
    require_once('./includes/PHP/footer.inc.php');
?>