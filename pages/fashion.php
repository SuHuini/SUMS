<?php
	include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
	<style>
	.s_header{
				
		height:100px;
		width:100;
		border: 5px solid midnightblue;
		background-color: FireBrick;
		font-size:30px;
		color: white;
				  
			 }
			 
	.s_headerimg{
		height:100px;
	
	}		 
	 a{
		color:midnightblue;
			 }
	.s_image{
		border: 1px solid midnightblue;
		height: 300px;
		width: 400px;
		font-size: 1.0em;
		font-weight: bold;
					}
	 #s_div{
	 	display: flex;
    flex-direction: row;
    width: 70%;
    border: 0px midnightblue solid;
    margin: 0 auto;
    background-color:BurlyWood;

	 }


	
</style>
	<title> Fashion Page</title>
    <link rel="stylesheet" type="text/css" href="fashion.css">
</head>
<body>
	<?php
		include('header.php');
	?>
	<p></p>
<center>
  <h1>Clothes</h1>
  <div id="s_div">
  	<div class="s_image"><br><img src="../images/back.jpg" style="height:200px;width:100;"/><br>Couple Kitenge outfit <br>Price:3000<br><br></div><br>
		<div class="s_image"><br><img src="../images/m2.jpg" alt="At the movies" style="height:200px;width:100;"/><br>Kitenge Casual Shirt <br>Price:1500<br> </div>
		<br><div class="s_image"><br><img src="../images/k1.jpg"  style="height:200px;width:200px;"/> <br> Girl Kitenge A skirt<br> Price:1000<br></div>
	</div>
	<div id="s_div">
		<br><div class="s_image"><br><img src="../images/m1.jpg" style="height:200px;width:100;"/><br>Male Kitenge outfit <br>Available in a wide variety of colours<br> Price:2000<br></div>
		<br><div class="s_image"><br><img src="../images/l1.jpg"  style="height:200px;width:100;"/><br>Kitenge A shape lady Skirt<br>Price: 1500<br></div>
		<br><div class="s_image"><br><img src="../images/k3.jpg" style="height:200px;width:100;"/><br>Boy Kitenge Shirt<br>Available in  green, orange & maroon<br>Price:500<br></div>
	</div>
		
				
  </center>

	

</body>
</html>