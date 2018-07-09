<?php
	include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>

<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;

}

.gallery{
  display: inline-block;
  margin-top: 200px;
}

div.desc {
    padding: 15px;
    text-align: center;
    margin-top: 100px;
    font-size: 30px;
}
</style>
</head>
<body>
	<?php
		include('header.php');
	?>
	<p></p>
 <header>
    <center><h1 style =" font-size: 60px;"> Fashion and Design</h1></center>
    <div>
      <ul class="main_nav">
          <li><a href="fashion.php">fashion</a></li>
        <li><a href="men.php">Men</a></li>
        <li><a href="ladies.php">Ladies</a></li>
        <li class="active"><a href="kids.php">Kids</a></li>
        <li><a href="familly.php">Familly</a></li>
      </ul>
    </div>
    
  </header>

<div class="gallery">
  <a target="_blank" href="k1.jpg">
    <img src="../images/k1.jpg"  width="400" height="400">
  </a>
  <div class="desc">Cute baby girl kitenge skirt<br/> 500ksh</div>
</div>

<div class="gallery">
  <a target="_blank" href="k4.jpg">
    <img src="../images/k4.jpg"  width="400" height="400">
  </a>
  <div class="desc"> Typical West african kid suit<br/>
  3000ksh </div>
</div>

<div class="gallery">
  <a target="_blank" href="k3.jpg">
    <img src="../images/k3.jpg" width="400" height="400">
  </a>
  <div class="desc"> Casual kitenge shirt<br/> 500ksh</div>
</div>

<div class="gallery">
  <a target="_blank" href="k2.jpg">
    <img src="../images/k2.jpg" width="400" height="400">
  </a>
  <div class="desc"> Beutiful twins kitenge jamsuits<br/> 2000ksh</div>
</div>

</body>
</html>
