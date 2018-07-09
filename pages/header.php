<!-- Header starts here -->
<link href="../css/sums.css" rel="stylesheet">
<link href="fonts/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
<div id="a_bg">
		<div id="a_header">
			<div id="a_logo">
				<img src="../images/logo.png">
			</div>
			<div id="a_bt">
				<ul id="a_nav">
					<li><a href="../index.php">Home</a></li>
					<li><a href="fashion.php">Fashion</a></li>
					<li><a href="Jewellery.php">Jewellery</a></li>
					<li><a href="Den.php">Accessories</a></li>
				</ul>
				<ul id="a_nav2">
					<li>
						<?php
							if(!empty($_SESSION['userName'])){ ?>
								<a href="new_item.php">Add an item</a>
						<?php } ?>	
						
					</li>
					<li><a href="signin.php"><i class="fas fa-lock"></i> Sign in</a></li>
					<li><a href="signup.php"><i class="fas fa-user-plus"></i> Sign up</a></li>
				</ul>
			</div>
		</div>
	</div>