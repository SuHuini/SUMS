<?php
	include('conn.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Jewellery store</title>
        <link href="../css/jewel.css" rel="stylesheet" type="text/css">
        <style>/*
            .s_header{
                height:100px;
                width:100;
                border: 5px solid midnightblue;
                background-color: FireBrick;
                font-size:30px;
                color: white;
            }
            a{
                position: relative;
                left:1000px;
                bottom:10px
            }
            .s_headerimg{
                height:100px;
            }
			/*
            a{
                color:midnightblue;
            }
			*/
			
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
                background-color:white;
            }
            h1 {
                font: 50px;
                color: #d1a254;
            }
        </style>
    </head>
    <body>
		<?php
		include('header.php');
	?>
	<p></p>
        <center>
            <h1>Accesories</h1>
            <div id="s_div">
                <div class="s_image"><br><img src="../images/african bangle.jpg" style="height:200px;width:100;"/><br>African bangle <br>Price:100<br><br></div><br>
                <div class="s_image"><br><img src="../images/african necklace.jpg" alt="At the movies" style="height:200px;width:100;"/><br>African necklace <br>Comes in red, blue, yellow and white. <br>Price:500<br> </div>
                <br><div class="s_image"><br><img src="../images/earrings.jpg"  style="height:200px;width:200px;"/> <br> Gold earrings<br> Price:200<br></div>
            </div>
            <div id="s_div">
                <br><div class="s_image"><br><img src="../images/maasai beaded bangles.jpg" style="height:200px;width:100;"/><br>Maasai beaded bangles<br>Available in a wide variety of colours<br> Price:150<br></div>
                <br><div class="s_image"><br><img src="../images/happy gold neacklace.jpg"  style="height:200px;width:100;"/><br>Happy necklace<br>Price: 250<br></div>
                <br><div class="s_image"><br><img src="../images/maasa.jpg" style="height:200px;width:100;"/><br>Maasai earrings<br>Available in purple, maroon, red, green, yellow<br>Price:150<br></div>
            </div>
        </center>
		<div>
		<?php include('footer.php'); ?>x
	</div>
    </body>
</html>