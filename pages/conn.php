<?php
session_start();
//connection code strat
$conn = mysqli_connect('localhost', 'root', '', 'sums'); 

if(!$conn){ 
    die("Could not Connect: "); //.mysqli_error($conn);
}

//connection code end
//register seller
if(isset($_POST['register'])){
	$schoolId = $_POST['schoolId'];
    $firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$passWord = $_POST['passWord'];
	
	if (empty($schoolId)) { 
		echo ("school id is required \n"); 
	}
	if (empty($firstName)) { 
		echo ("firstname is required \n"); 
	}
	if (empty($lastName)) { 
		echo ("lastname is required \n"); 
	}
	if (empty($gender)) { 
		echo ("gender is required \n"); 
	}
	if (empty($email)) { 
		echo ("email is required \n"); 
	}
	if (empty($passWord)) { 
		echo ("password is required \n"); 
	}
	
    /** Insert the the values to DB */
    $sql = "INSERT INTO `seller`(`school_id`, `firstName`, `lastName`, `password`, `email`, `gender`) VALUES ('$schoolId','$firstName','$lastName','$passWord','$email','$gender')";
    $result = mysqli_query($conn, $sql);
	if($result){
		header("location: ../index.html");
	}
}

//login seller
if(isset($_POST['submit'])){
        
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
	
		if (empty($userName)) { 
			echo ("Username is required \n"); 
		}
		if (empty($userName)) { 
			echo("Password is required"); 
		}
		
		if(!empty($userName ) && !empty($userName)){
			// SQL query to fetch information of registerd users and finds user match.
			$sql = "SELECT * FROM `seller` WHERE firstName='$userName' AND password='$passWord' ";
			$result = mysqli_query($conn, $sql);
			$_SESSION['userName'] = $userName;
			$rows = mysqli_num_rows($result); 

			if ($rows == 1) {
			header("location: ../index.php"); // Redirecting To Other Page
			} else {
			$error = "Username or Password is invalid";
			}
		}
    }
//logout 
if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: ./index.php");
	}

//new item add
if(isset($_POST['add'])){
    $fileN = $_POST['uploadfl'];
    $itemNme = $_POST['itemN'];
    $itemPrc = $_POST['itemP'];
    $itemDsc = $_POST['itemD'];
    
    /** Insert the the values to DB */
    $sql = "INSERT INTO `items`(`image_path`, `item_name`, `item_price`, `item_desc`) VALUES('$fileN','$itemNme','$itemPrc','$itemDsc')";
    $result = mysqli_query($conn, $sql);
}

?>