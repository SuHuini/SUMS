<?php
    include_once('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>signin</title>				
	<link rel="stylesheet" type="text/css" href="../css/sums.css">
    <link href="../fonts/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
</head>
<body>
	<div>
		<div id="j_form">
		<form method="post">
                <fieldset>
                    <div id="j_ico">
                        <i class="fas fa-user-circle"></i>
                        <div class="j_log">
                            <p>Login</p>
                        </div>
                    </div>
                    <div class="j_in">
                        <div>User Name:</div>
                        <div class="j_intxt">
                            <input type="text" placeholder="Enter your username" size="30" name="userName">
                        </div>
                    </div>
                    <div class="j_in">
                        <div>Password:</div>
                        <div class="j_intxt">
                            <input type="text" placeholder="Password" size="30" name="passWord">
                        </div>
                    </div>
                    <div class="j_bt">
                        <div class="j_snd">
                            <input type="submit" value="Send" name="submit">
                        </div>
                        <div class="j_snd">
                            <a href="signup.php">signup</a>
                        </div>
                    </div>
                </fieldset>
            </form>
		</div>
	</div>
    </body>
</html>

