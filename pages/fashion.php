<?php
	include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
	<style>
	{
	margin:0;
	padding: 0;
}
header
{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url();
	height: 300vh;
	background-size: cover;
	background-position: center;
	color: #d1a254;
	


}
.main_nav
{
	float:right;
	list-style: none;
	margin-top: -50px;
}
.main_nav li
{
	display: inline-block;
}
.main_nav li a
{
	color: #d1a254;
	text-decoration: none;
	padding: 5px 15px;
	font-family: "arial", sans-serif;
	font-size: 20px;
}
.main_nav li.active a
{
	border: 1px solid black;
}
.main_nav li a: hover
{
	border: 1px solid white;
}
.gallery{
	display: inline-block;
	margin-top: 100px;
}
.desc{
	color: #d1a254;
	text-decoration: none;
	padding: 5px 15px;
	font-family: "arial", sans-serif;
	font-size: 30px;

}
.p{
	margin-top: 400px;
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
	<header>
		<center><h1 style =" font-size: 60px;">Fashion and Design</h1></center>

		<center><p style="font-size:30px;"> Welcome to Our Fashion and Design page </p></center>
		<div>
			<ul class="main_nav">
				<li class="active"><a href="fashion.php">fashion</li>
				<li><a href="men.php">Men</a></li>
				<li><a href="ladies.php">Ladies</a></li>
				<li><a href="kids.php">Kids</a></li>
				<li><a href="familly.php">Familly</a></li>
			</ul>
		</div>

		<div class="gallery">
  <a target="_blank" href="back.jpg">
    <img src="../images/back.jpg"  width="400" height="400">
  </a>
  <div class="desc"> well designed couple clothes<br> 
                            1000 ksh<br></div>
</div>

<div class="gallery">
  <a target="_blank" href="m2.jpg">
    <img src="../images/m2.jpg"  width="400" height="400">
  </a>
  <div class="desc"> Simple Kitenge Shirt <br>
                           500ksh</div>
</div>

<div class="gallery">
  <a target="_blank" href="k1.jpg">
    <img src="../images/k1.jpg"  width="400" height="400">
  </a>
  <div class="desc"> cute baby girl kitenge skirt <br>
                           500ksh</div>
</div>

<div class="gallery">
  <a target="_blank" href="m1.jpg">
    <img src="../images/m1.jpg"  width="400" height="400">
  </a>
  <div class="desc"> Kitenge trouser and shirt <br>
                           500ksh</div>
</div>


<div class="gallery">
  <a target="_blank" href="l1.jpg">
    <img src="../images/l1.jpg"  width="400" height="400">
  </a>
  <div class="desc"> long kitenge skirt for ceremonies<br>800ksh<br></div>
</div>

<div class="gallery">
  <a target="_blank" href="k3.jpg">
    <img src="../images/k3.jpg"  width="400" height="400">
  </a>
  <div class="desc"> Casual kitenge shirt for a baby boy<br>
                           400ksh<br> </div>

</div>
		
	</header>

	

</body>
</html>