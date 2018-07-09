<?php
	include('conn.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Sign up</title>
    <!-- Custom  css styles for this site -->
    <link href="../css/sums.css" rel="stylesheet">
    <link href="../fonts/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
	
    </head>
    <body>
        <!-- header start -->
        <?php
			include('header.php');
		?>
    <!-- header end -->
        <!-- ALL BODY CONTENT COMES HERE -->
        <div id="j_form">
            <form method="post">
                <fieldset>
                    <div id="j_ico">
                        <i class="fas fa-user-circle"></i>
                        <div class="j_log">
                            <p>Create a new account</p>
                        </div>
                    </div>
					<div class="j_in">
                        <div>School id:</div>
                        <div class="j_intxt">
                            <input type="text" placeholder="School id number" size="30" name="schoolId">
                        </div>
                    </div>
                    <div class="j_in">
                        <div>First Name:</div>
                        <div class="j_intxt">
                            <input type="text" placeholder="First Name" size="30" name="firstName">
                        </div>
                    </div>
                    <div class="j_in">
                        <div>Last Name:</div>
                        <div class="j_intxt">
                            <input type="text" placeholder="Last Name" size="30" name="lastName">
                        </div>
                    </div>
                    <div class="j_in">
                        <div>Gender:</div>
                        <div class="j_intxt">
                            <select size="1"style="width:240px;" name="gender">
                                <option hidden>--Select Gender--</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="j_in">
                        <div>E-mail:</div>
                        <div class="j_intxt" id="myMail">
                            <input type="email" placeholder="E-mail" size="30" name="email">
                        </div>
                    </div>
                    <div class="j_in">
                        <div>Password:</div>
                        <div class="j_intxt">
                            <input type="text" placeholder="Password" size="30" name="passWord">
                        </div>
                    </div>
                    <div id="j_bt">
                        <div class="j_snd">
                            <button type="submit" name="register">Register</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        
        <!-- ALL BODY CONTENT ENDS HERE -->
    </body>
    <!-- custom JavaScript for this site-->
    <script src="javascript/sums.js"></script>
</html>
