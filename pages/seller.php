<!DOCTYPE html>
<html>
    <head>
        <title>Add a seller</title>
		<link href="../css/sums.css" rel="stylesheet">
    </head>
    <body>
		<?php
			include('header.php');
		?>
		<p></p>
        <div id="j_form">
            <form action="save_seller.php" method="post">
				<fieldset>
					<label for="idNum">Student Id Number:</label>
					<input type="text" name="idNum" placeholder="Strath Id Number">
					<br>
					<br>
					<label for="firstN">First Name:</label>
					<input type="text" name="firstN" placeholder="First Name">
					<br>
					<br>
					<label for="lastN">Last Name:</label>
					<input type="text" name="lastN" placeholder="Last Name">
					<br>
					<br>
					<label for="pWord">password:</label>
					<input type="password" name="pWord" placeholder="password">
					<br>
					<br>
					<label for="Mail">Student Email Adress:</label>
					<input type="text" name="Mail" placeholder="Strath Mail">
					<br>
					<br>
					<!-- gender comed here -->
					<label for="gender">gender:</label>
					<br>
					<label for="male">Male</label>
					<input type="radio" name="gender" id="male" value="male">
					<label for="female">Female</label>
					<input type="radio" name="gender" id="female" value="female">
					<label for="other">Other</label>
					<input type="radio" name="gender" id="other" value="other">
					<br>
					<br>
					<input type="submit" name="submit" value="send">
					<input type="reset" value="Reset the form">
				</fieldset>
            </form>
        </div>
    </body>
</html>
