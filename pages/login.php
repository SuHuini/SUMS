<!DOCTYPE html>
<html>
    <head>
    <title>log in</title>
    <!-- Custom  css styles for this site -->
    <link href="../css/sums.css" rel="stylesheet">
    <link href="../fonts/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
	<link href="bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <!-- header end -->
        <!-- ALL BODY CONTENT COMES HERE -->
        <div id="j_form">
            <form action="login.php" method="post">
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
                    <div id="j_bt">
                        <div class="j_snd">
                            <input type="submit" value="Semd" name="submit">
                        </div>
                        <div class="j_snd">
                            <a href="#">forgot password</a>
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


<?php
    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    include_once('conn.php');
    
    
    if(isset($_POST['submit'])){
        //echo "works";
        
        // Define $username and $password
        $userName=$_POST['userName'];
        $passWord=$_POST['passWord'];
		/*
        // To protect MySQL injection for Security purpose
        $userName = stripslashes($userName);
        $passWord = stripslashes($passWord);
        $userName = mysqli_real_escape_string($conn,$userName);
        $passWord = mysqli_real_escape_string($conn,$passWord);
		*/
        // SQL query to fetch information of registerd users and finds user match.
        $sql = "SELECT * FROM `seller` WHERE firstName='$userName' AND password='$passWord' ";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($result); 
        
        if ($rows == 1) {
        //$_SESSION['login_user']=$userName; // Initializing Session
        header("location: signup.php"); // Redirecting To Other Page
        } else {
        $error = "Username or Password is invalid";
            echo $error;
        }
        
    }
    
    
    
?>