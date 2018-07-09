<!DOCTYPE html>
<html>
<body>
<head>
<title>Electronics store</title>

<style>
	.s_header{
				
		height:100px;
		width:100;
		border: 5px solid midnightblue;
		background-color: FireBrick;
		font-size:30px;
		color: white;
				  
			 }
	
	/*
	a{
			 position: relative;
			 left:1000px;
			 bottom:10px;
			 color:midnightblue;
			 }*/
	.s_headerimg{
		height:100px;
	
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


	body {
				/* background-color: lightblue; */
		background-color:white;
			}
	h1 {
		font: 50px;
				color: midnightblue;
				
			}
</style>
  </head>
<?php include('header.php');?>
  <p></p>
  <center>
<h1>Jewellery</h1>
  	
  	<div id="s_div">
  	 <br><div class="s_image"><br><img src="../images/iphone7.jpg" style="height:200px;width:100;" /><br>iPhone 7 plus <br>Price:40000 Kshs<br>Contact: 0789678543<br></div><br>

  	<!--  <br><div class="s_image"><br><img src="laptop.jpg" style="height:200px;width:100;"/><br>Maasai beaded bangles<br>Available in a wide variety of colours<br> Price:150<br></div> -->
		<div class="s_image"><br><img src="../images/powerbank.jpg" style="height:200px;width:100;"/><br>Laptop powerbank <br>Comes in red, blue, yellow and white. <br>Price:500 Kshs<br>Contact: 0789678543<br> </div>
		<br><div class="s_image"><br><img src="../images/earphones.jpg"  style="height:200px;width:200px;"/> <br>Beats earphones<br> Price:500 Kshs<br>Contact: 0789678543<br></div>
	</div>
	<div id="s_div">
		<br><div class="s_image"><br><img src="../images/download.jpg" style="height:200px;width:100;"/><br>Leather watch<br>Available in a wide variety of colours<br> Price:550 Kshs<br>Contact: 0789678543<br></div>
		<br><div class="s_image"><br><img src="../images/powerbank2.jpg" style="height:200px;width:100;"/><br>Phillips powerbank<br>22240Mhz<br> Price:1050 Kshs<br>Contact: 0789678543<br></div>
		<br><div class="s_image"><br><img src="../images/nikewatch.jpg"  style="height:200px;width:100;"/><br>Apple Nike watch<br>Price:2250 Kshs<br>Contact: 0789678543<br></div>
		<!-- <br><div class="s_image"><br><img src="ramcards" alt="Ram cards" style="height:200px;width:100;"/><br>Ram cards<br>!6 GB Ram & £2 GB RAM available<br>Price:2000<br></div>
 -->	</div>
		
				
  </center>

  
  
  
  
</form>
</body>
</html>
  