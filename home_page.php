<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no">
	<title>IKEA</title>
	<link rel="stylesheet" href="css/fancySelect.css" />
	<link rel="stylesheet" href="css/uniform.css" />
	<link rel="stylesheet" href="css/all.css" />
	<link media="screen" rel="stylesheet" type="text/css" href="css/screen.css" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">
		<div class="wrapper-holder">
			<header id="header">
				<span class="logo"><a href="home_page.php">IKEA</a></span>
				<ul class="tools-nav tools-nav-mobile">
					<li class="items"><a href="cart.html"><span>0</span> Items, <strong>$0.00</strong></a></li>
					<li class="login"><a href="#">Login</a> / <a href="#">register</a></li>
				</ul>
				<div class="bar-holder">
				<a class="menu_trigger" href="#">menu</a>
					<nav id="nav">
						<ul>
							<li><a href="products_bathroom.php">Bathroom</a></li>
							<li><a href="products_bedroom.php">Bedroom</a></li>
							<li><a href="products_kitchen.php">Kitchen</a></li>
							<li><a href="products_livingroom.php">Living Room</a></li>
							<li><a href="products_outdoor.php">Outdoor</a></li>
						</ul>
					</nav>
					<ul class="tools-nav">
						<li class="items"><a href="cart.html"><span>0</span> Items, <strong>$0.00</strong></a></li>
						<li class="login"><a href="#">Login</a> / <a href="#">register</a></li>
					</ul>
				</div>
			</header>
			<section class="promo">
				<ul class="slider">
					<li style="background: url(images/ikea_splash.jpg) no-repeat 50% 50%;">
						<div class="slide-holder">
							<div class="slide-info">
								<h1 style="background-color: black">Ultimate Home Furnishing</h1>
								<p style="background-color: black">Excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
								<a class="btn white big" href="products_all.php">Begin the Journey</a>
							</div>
						</div>
					</li>
					<li style="background: url(images/outdoor_splash.jpg) no-repeat 50% 50%;">
						<div class="slide-holder">
							<div class="slide-info">
								<h1 style="background-color: black">Outdoor Decor</h1>
								<p style="background-color: black">Excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
								<a class="btn white big" href="products_all.php">Begin the Journey</a>
							</div>
						</div>
					</li>
					<li style="background: url(images/kitchen_splash.jpg) no-repeat 50% 50%;">
						<div class="slide-holder">
							<div class="slide-info">
								<h1 style="background-color: black">Kitchen Desire</h1>
								<p style="background-color: black">Excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
								<a class="btn white big" href="products_all.php">Begin the Journey</a>
							</div>
						</div>
					</li>
					<li style="background: url(images/bedroom_splash.jpg) no-repeat 50% 50%;">
						<div class="slide-holder">
							<div class="slide-info">
								<h1 style="background-color: black">Bedroom Comfort</h1>
								<p style="background-color: black">Excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
								<a class="btn white big" href="products_all.php">Begin the Journey</a>
							</div>
						</div>
					</li>
				</ul>
			</section>
			<section id="main">
				<table style="width:100%">
						<tr>
							<th style="color:black; font-size: 150%">What are the Top 20 selling products at each store?</th>
						</tr>
						<?php
							$servername = "localhost";
							$username = "root";
							$password = "!RedBananas31";
							$dbname = "projectcoffee";					
							// Create connection
			
							$conn = new mysqli($servername, $username, $password, $dbname);
						
							// Check connection
							if ($conn->connect_error) 
							{
								die("Connection failed: " . $conn->connect_error);
							}
							else
							{
								$sql = "SELECT store_ID, productName
										FROM product INNER JOIN sales ON product.ID = sales.product_ID
										WHERE amountSold >0
										ORDER BY store_ID;";

									$result = $conn-> query($sql);
									while($row = $result->fetch_assoc())
									{
										echo "<tr><td>" . $row["productName"] . "</td><td>" . $row["store_ID"] . "</td></tr>"; 
									}		
								$conn-> close(); 
							}
						?>
				</table>
				<table style="width:100%">
						<tr>
							<th style=color:black>What are the Top 20 selling products in each state??</th>
						</tr>
						<?php
							$servername = "localhost";
							$username = "root";
							$password = "!RedBananas31";
							$dbname = "projectcoffee";
					
							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
						
							// Check connection
							if ($conn->connect_error) 
							{
								die("Connection failed: " . $conn->connect_error);
							}
							else
							{
								$sql = "SELECT storeState as State, productName as Product
								FROM sales INNER JOIN product ON sales.product_ID = product.ID
										   INNER JOIN store   ON sales.store_ID = store.ID
								WHERE amountSold > 0
								ORDER BY store_ID;";

									$result = $conn-> query($sql);
									while($row = $result->fetch_assoc())
									{
										echo "<tr><td>" . $row["Product"] . "</td><td>" . $row["State"] . "</td></tr>"; 
									}		
								$conn-> close(); 
							}
						?>
				</table>
				<table style="width:100%">
						<tr>
							<th style=color:black>What are the 5 stores with the most sales so far this year?</th>
						</tr>
						<?php
							$servername = "localhost";
							$username = "root";
							$password = "!RedBananas31";
							$dbname = "projectcoffee";
					
							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
						
							// Check connection
							if ($conn->connect_error) 
							{
								die("Connection failed: " . $conn->connect_error);
							}
							else
							{
								$sql = "SELECT storeName as StoreName, SUM(amountSold) as TotalUnitsSold
								FROM store INNER JOIN sales ON store.ID = sales.store_ID
								WHERE amountSold >0
								GROUP BY store_ID
								ORDER BY SUM(amountSold) DESC
								LIMIT 5;";

									$result = $conn-> query($sql);
									while($row = $result->fetch_assoc())
									{
										echo "<tr><td>" . $row["StoreName"] . "</td><td>" . $row["TotalUnitsSold"] . "</td></tr>"; 
									}		
								$conn-> close(); 
							}
						?>
				</table>
				<table style="width:100%">
						<tr>
							<th style=color:black>In how many stores do Outdoor products outsell Livingroom products?</th>
						</tr>
						<?php
							$servername = "localhost";
							$username = "root";
							$password = "!RedBananas31";
							$dbname = "projectcoffee";
					
							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
						
							// Check connection
							if ($conn->connect_error) 
							{
								die("Connection failed: " . $conn->connect_error);
							}
							else
							{
								$sql = "SELECT storeName as StoreName, productType as Type, MAX(amountSold) as Sold
								FROM sales INNER JOIN product ON sales.product_ID = product.ID
										   INNER JOIN store   ON sales.store_ID = store.ID
								WHERE productType = \"Outdoor\" OR productType = \"Living Room\"
								GROUP BY store.ID
								ORDER BY productType;";

									$result = $conn-> query($sql);
									while($row = $result->fetch_assoc())
									{
										echo "<tr><td>" . $row["StoreName"] . "</td><td>" . $row["Type"] . "</td><td>" . $row["Sold"] ."</td></tr>"; 
									}		
								$conn-> close(); 
							}
						?>
				</table>
				<table style="width:100%">
						<tr>
							<th style=color:black>What are the tope 3 types of products that customers buy alongside bedroom products?</th>
						</tr>
						<?php
							$servername = "localhost";
							$username = "root";
							$password = "!RedBananas31";
							$dbname = "projectcoffee";
					
							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
						
							// Check connection
							if ($conn->connect_error) 
							{
								die("Connection failed: " . $conn->connect_error);
							}
							else
							{
								$sql = "SELECT productType as Type
								FROM product INNER JOIN sales ON product.ID = sales.product_ID
								WHERE amountSold > 0 AND productType != \"Bedroom\"
								GROUP BY productType
								ORDER BY MAX(amountSold) DESC
								LIMIT 3;";

									$result = $conn-> query($sql);
									while($row = $result->fetch_assoc())
									{
										echo "<tr><td>" . $row["Type"] . "</td></tr>"; 
									}		
								$conn-> close(); 
							}
						?>
				</table>
				<!--<div class="boxes">
					<div class="box">
						<a href="#">
							<span class="bg"></span>
							<img src="images/img-01.jpg" alt="" />
							<div class="box-info">
								<div class="box-info-holder">
									<span class="title"><span>New stuff</span></span>
									<h2>Suits for gentlemen</h2>
									<span class="btn white normal">More new suits</span>
								</div>
							</div>
						</a>
					</div>
					<div class="box">
						<a href="#">
							<span class="bg"></span>
							<img src="images/img-02.jpg" alt="" />
							<div class="box-info">
								<div class="box-info-holder">
									<span class="title"><span>Sale</span></span>
									<h2>all Jackets 50% off</h2>
									<span class="btn white normal">See products</span>
								</div>
							</div>
						</a>
					</div>
					<div class="box">
						<a href="#">
							<span class="bg"></span>
							<img src="images/img-03.jpg" alt="" />
							<div class="box-info">
								<div class="box-info-holder">
									<span class="title"><span>Hot</span></span>
									<h2>Offer for real men</h2>
									<span class="btn white normal">Be a real men</span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="block-advice">
					<div class="advice-holder">
						<h2>Newsletter</h2>
						<p>Join to receive promotions and other good news.</p>
					</div>
					<form action="#" class="form-newsletter">
						<fieldset>
							<input type="text" placeholder="Your email..." />
							<input class="btn black normal" type="submit" value="Subscribe" />
						</fieldset>
					</form>
				</div>-->
			</section>
		</div>
		<footer id="footer">
			<div class="footer-holder">
				<div class="footer-frame">
					<div class="footer-content">
						<div class="col-holder">
							<div class="col">
								<div class="heading">
									<h3>Not About us</h3>
								</div>
								<p>Vero eos et accusamus et iusto dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti</p>
								<p>Quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
							</div>
							<div class="col">
								<div class="heading">
									<h3>Leave Me Alone</h3>
								</div>
								<address>
									<p><strong>Wonderful Mothers</strong></p>
									<p>3658 Your Mom's House Rd</p>
									<p>Oakland</p>
								</address>
								<address>
									<p>(45) 523 565 242</p>
									<p><a href="mailto:bigboi420@organizedcrime.biz">office@elegantic.com</a></p>
								</address>
							</div>
							<div class="col col-contact">
								<div class="heading">
									<h3>Don't Follow us</h3>
								</div>
								<ul class="social">
									<li class="facebook"><a href="#">Facebook</a></li>
									<li class="google"><a href="#">Google+</a></li>
									<li class="twitter"><a href="#">Twitter</a></li>
									<li class="pinterest"><a href="#">Pinterest</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="footer-bottom">
						<div class="holder">
							<p>Copyright 2014 Elegantic. All rights reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>	
	</div>
	
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="js/fancySelect.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>