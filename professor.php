<?php
    require_once('./includes/PHP/header.inc.php');
?>
            <form action="includes/PHP/form.php" method="post">
                <fieldset>
					<legend>Student Info</legend>
                    <label>Student Number</label>
                    <input id="number" name="number" type="number" />
					<br />
					<label>Student Name</label>
					<input id="name" name="name" type="text" />
                </fieldset>
                <input type="submit" value="Done" />
                <input type="reset" />
            </form>
<?php
    require_once('./includes/PHP/footer.inc.php');
?>