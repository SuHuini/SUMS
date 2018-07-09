<?php
	include('pages/conn.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <title>SU marketing system</title>
    <!-- Custom  css styles for this site -->
    <link href="css/sums.css" rel="stylesheet">
    <link href="fonts/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
    </head>
    <body>
        <!-- header start -->
        <div id="a_bg">
		<div id="a_header">
			<div id="a_logo">
				<img src="images/logo.png">
			</div>
			<div id="a_bt">
				<ul id="a_nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="pages/fashion.php">Fashion</a></li>
					<li><a href="pages/Jewellery.php">Jewellery</a></li>
					<li><a href="pages/Den.php">Accessories</a></li>
				</ul>
				<ul id="a_nav2">
					<?php
						if(!empty($_SESSION['userName'])){ ?>
							<li>
								<a href="pages/new_item.php">Add an item</a>
							</li>
							<li>
								<form method="post">
									<a href="index.php?logout='1'" name="signout">Sign Out</a>
								</form>
							</li>
					<?php } else {?>
					<li><a href="pages/signin.php">Sign in</a></li>
					<li><a href="pages/signup.php">Sign up</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
    <!-- header end -->
		<p style="height: 300px;">sdfghjk</p>
    <!-- ALL BODY CONTENT COMES HERE -->
       <div id="a_bdy">
        <div>
            <!-- courasel comes here -->
        </div>
        <div id="a_flt">
            <!-- flters come here -->
            <div>
                <div class="a_ul1">
                    <h3><p>Category</p></h3>
                    <ul>
                        <li><a><span class="icon-chevron-right"></span>Fashion</a></li>
                        <li><a><span class="icon-chevron-right"></span>Watches</a></li>
                        <li><a><span class="icon-chevron-right"></span>Fine Jewellery</a></li>
                        <li><a><span class="icon-chevron-right"></span>Men Jewellery</a></li>
                        <li><a><span class="icon-chevron-right"></span>Computers</a></li>
                        <li><a><span class="icon-chevron-right"></span>Phones</a></li>
                        <li><a><span class="icon-chevron-right"></span>Shoes</a></li>
                    </ul>
                </div>
                <div class="a_ul1">
                    <h3><p>Brands</p></h3>
                    <ul>
                        <li><a>Acne</a></li>
                        <li><a>Grüne Erde</a></li>
                        <li><a>Albiro</a></li>
                        <li><a>Ronhill</a></li>
                        <li><a>Oddmolly</a></li>
                        <li><a>Boudestijn</a></li>
                        <li><a>Rösch creative culture</a></li>
                    </ul>
                </div>
                <div class="a_ul1">
                    <h3><p>Price range</p></h3>
                    <ul>
                        <li><a>Acne</a></li>
                        <li><a>Grüne Erde</a></li>
                        <li><a>Albiro</a></li>
                        <li><a>Ronhill</a></li>
                        <li><a>Oddmolly</a></li>
                        <li><a>Boudestijn</a></li>
                        <li><a>Rösch creative culture</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        
        <div id="a_prod">
            <!-- row one -->
            <div id="a_prod1">
                <h3><p>Fashion</p></h3>
                <div class="a_items">
                    <!-- item one -->
                    <img src="images/noimage.jpg">
                    <h3><p>PRICE:500</p></h3>
                    <P>Easy polo black edition</P>
                    <div>
                        <a href="#">
                            <i class="fas fa-shopping-cart"></i>
                            Add to cart
                        </a>
                    </div>
                </div>
                <div class="a_items">
                    <!-- item two -->
                    <img src="images/noimage.jpg">
                    <h3><p>PRICE:5000</p></h3>
                    <P>Easy polo black edition</P>
                    <div>
                        <a href="#">
                            <i class="fas fa-shopping-cart"></i>
                            Add to cart
                        </a>
                    </div>
                </div>
                <div class="a_items">
                    <!-- item three -->
                    <img src="images/noimage.jpg">
                    <h3><p>PRICE:50,000</p></h3>
                    <P>Easy polo black edition</P>
                    <div>
                        <a href="#">
                            <i class="fas fa-shopping-cart"></i>
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
            <!-- row 2 -->
            <hr>
            <div>
                <div id="a_prod1">
                <h3><p>Jewellery</p></h3>
                <div class="a_items">
                    <!-- item one -->
                    <img src="images/noimage.jpg">
                    <h3><p>PRICE:500</p></h3>
                    <P>Easy polo black edition</P>
                    <div>
                        <a href="#">
                            <i class="fas fa-shopping-cart"></i>
                            Add to cart
                        </a>
                    </div>
                </div>
                <div class="a_items">
                    <!-- item two -->
                    <img src="images/noimage.jpg">
                    <h3><p>PRICE:5000</p></h3>
                    <P>Easy polo black edition</P>
                    <div>
                        <a href="#">
                            <i class="fas fa-shopping-cart"></i>
                            Add to cart
                        </a>
                    </div>
                </div>
                <div class="a_items">
                    <!-- item three -->
                    <img src="images/noimage.jpg">
                    <h3><p>PRICE:50,000</p></h3>
                    <P>Easy polo black edition</P>
                    <div>
                        <a href="#">
                            <i class="fas fa-shopping-cart"></i>
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
            </div>
            <!-- row 3 -->
            <hr>
            <div>
                <div id="a_prod1">
                    <hr id="h">
                <h3><p id="acc">Accessories</p></h3>
                <div class="a_items">
                    <!-- item one -->
                    <img src="images/noimage.jpg">
                    <h3><p>PRICE:500</p></h3>
                    <P>Easy polo black edition</P>
                    <div>
                        <a href="#">
                            <i class="fas fa-shopping-cart"></i>
                            Add to cart
                        </a>
                    </div>
                </div>
                <div class="a_items">
                    <!-- item two -->
                    <img src="images/noimage.jpg">
                    <h3><p>PRICE:5000</p></h3>
                    <P>Easy polo black edition</P>
                    <div>
                        <a href="#">
                            <i class="fas fa-shopping-cart"></i>
                            Add to cart
                        </a>
                    </div>
                </div>
                <div class="a_items">
                    <!-- item three -->
                    <img src="images/noimage.jpg">
                    <h3><p>PRICE:50,000</p></h3>
                    <P>Easy polo black edition</P>
                    <div>
                        <a href="#">
                            <i class="fas fa-shopping-cart"></i>
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
            </div>
            
        </div>
        <!-- sponsor caourasel-->
            <div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
    </div> 
    <!-- ALL BODY CONTENT ENDS HERE -->
	<div>
		<?php include('pages/footer.php'); ?>x
	</div>
    </body>
    <!-- custom JavaScript for this site-->
    <script src="javascript/sums.js"></script>
</html>
