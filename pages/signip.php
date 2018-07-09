<!DOCTYPE html>
<html>
<head>
	<title>signip</title>				
	<link rel="stylesheet" type="text/css" href="../css/sums.css">
	<link href="../fonts/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
</head>
<body>
	<div id="j_signin">
		<div id="j_form">
			<form method="post">
                <fieldset>
                    
                    <div class="j_in">
                        <div>User Name:</div>
                        <div>
                            <input type="text" placeholder="Enter your username" size="30" name="userName">
                        </div>
                    </div>
                    <div class="j_in">
                        <div>Password:</div>
                        <div>
                            <input type="text" placeholder="Password" size="30" name="passWord">
                        </div>
                    </div>
                    <div class="j_in">
                        <div>
                            <input type="submit" value="Send" onclick="click()">
                        </div>
                        <div>
                            <a href="#">forgot password</a>
                        </div>
                    </div>
                </fieldset>
            </form>
		</div>
	</div>
	<div id="j_signup">
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
                        <div>First Name:</div>
                        <div class="j_intxt">
                            <input type="text" placeholder="First Name" size="30">
                        </div>
                    </div>
                    <div class="j_in">
                        <div>Last Name:</div>
                        <div class="j_intxt">
                            <input type="text" placeholder="Last Name" size="30">
                        </div>
                    </div>
                    <div class="j_in">
                        <div>Gender:</div>
                        <div class="j_intxt">
                            <select size="1"style="width:240px;">
                                <option value="" hidden>--Select Gender--</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="j_in">
                        <div>E-mail:</div>
                        <div class="j_intxt" id="myMail">
                            <input type="text" placeholder="E-mail" size="30">
                        </div>
                    </div>
                    <div class="j_in">
                        <div>Password:</div>
                        <div class="j_intxt">
                            <input type="text" placeholder="Password" size="30">
                        </div>
                    </div>
                    <div id="j_bt">
                        <div class="j_snd">
                            <button type="submit">Register</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
	</div>
    </body>
</html>

<?php
	//php for signin strat
    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    include_once('conn.php');
    
    if(isset($_POST['submit'])){
        echo "works";
        
        // Define $username and $password
        $userName=$_POST['userName'];
        $passWord=$_POST['passWord'];
        /*
        // To protect MySQL injection for Security purpose
        $userName = stripslashes($userName);
        $passWord = stripslashes($passWord);
        $userName = mysqli_real_escape_string($userName);
        $passWord = mysqli_real_escape_string($passWord);
        */
        // SQL query to fetch information of registerd users and finds user match.
        $sql = "SELECT * FROM `seller` WHERE firstName='$userName' AND password='$passWord' ";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($result); 
        echo $rows;
        
        if ($rows == 1) {
        //$_SESSION['login_user']=$userName; // Initializing Session
        header("location: ../index.html"); // Redirecting To Other Page
        } else {
        $error = "Username or Password is invalid";
        }
        
    }

	//php for signin end
	//php for signup start
	
	//php for signup end
    
?>