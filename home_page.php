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

	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Table/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table/css/util.css">
	<link rel="stylesheet" type="text/css" href="Table/css/main.css">
<!--===============================================================================================-->

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">
		<div class="wrapper-holder">
			<header id="header">
				<!--<span class="logo"><a href="home_page.php">IKEA</a></span>-->
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
				</table>
				<div class="limiter">
					<div class="container-table100">
						<div class="wrap-table100">
							<div class="table100 ver1 m-b-110">
								<div class="table100-head">
									<table>
										<thead>
											<tr class="row100 head">
												<th class="cell100 column1">Rank</th>
												<th class="cell100 column2">Product Name</th>
												<th class="cell100 column3">Units Sold</th>
												<th class="cell100 column4">Store</th>
											</tr>
										</thead>
									</table>
								</div>
			
								<div class="table100-body js-pscroll">
									<table>
										<tbody>
											<?php										
												$conn = new mysqli("coffee-gave-me-gas.cgzqmhf3sjbn.us-east-2.rds.amazonaws.com", "root", "csc4112018", "projectcoffee");
												$result = $conn->query("SELECT Rank, productName AS Product, units AS 'Units Sold', storeName AS Store
																		FROM (	SELECT product_ID AS upc, amountSold AS units_sold, store_ID, storeName,
																				-- Leveraged mysql session variables to track ranking 
       																			-- If the store_ID is = to the previous one than increase the rank, otherwise start back at 1
          																		@cur_rank := IF(@store = store_ID, @cur_rank + 1, 1) AS Rank, 
          																		@store := store_ID,
          																		@units := amountSold AS units
																				-- In order to get the correct ranking order a Subquery of each stores products sales in descending order is needed
            																	FROM  (SELECT product_ID, amountSold, store_ID, storeName
																						FROM sales INNER JOIN store on store.ID = sales.store_ID
                        																ORDER BY store_ID, amountSold desc) 
																				AS top_items) 
																		AS rankings INNER JOIN product ON upc = product.ID
        																-- Cap the ranking at the top 20 items
																		WHERE rank <= 20 ");
												if ($result->num_rows > 0) 
												{
													while($row = $result->fetch_assoc())
													{
														echo "<tr class=\"row100 head\"><td class=\"cell100 column1\">" . $row["Rank"] . "</td><td class=\"cell100 column3\">" . $row["Product"] . "</td><td class=\"cell100 column3\">" . $row["Units Sold"] . "</td><td class=\"cell100 column4\">" . $row["Store"] . "</td></tr>"; 
													}		
													$conn-> close(); 
												}
												else
												{
													echo "<tr class=\"row100 head\"><td class=\"cell100 column1\">" . "There is no Data Found";
												}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>				
				<table style="width:100%">
						<tr>
							<th style="color:black; font-size: 150%">What are the Top 20 selling products in each state??</th>
						</tr>
				</table>
				<div class="limiter">
					<div class="container-table100">
						<div class="wrap-table100">
							<div class="table100 ver1 m-b-110">
								<div class="table100-head">
									<table>
										<thead>
											<tr class="row100 head">
												<th class="cell100 column1">Rank</th>
												<th class="cell100 column2">Product</th>
												<th class="cell100 column3">Units Sold</th>
												<th class="cell100 column4">State</th>
											</tr>
										</thead>
									</table>
								</div>
			
								<div class="table100-body js-pscroll">
									<table>
										<tbody>
											<?php
												$mysqli = new mysqli("coffee-gave-me-gas.cgzqmhf3sjbn.us-east-2.rds.amazonaws.com", "root", "csc4112018", "projectcoffee");
												$result = $mysqli->query("	SELECT Rank, productName AS Product, units AS 'Units Sold', storeState AS State
																			FROM (	SELECT product_ID AS upc, amountSold AS units_sold, store_ID, storeState,
																					-- Leveraged mysql session variables to track ranking 
																					-- If the storeStae is = to the previous one than increase the rank, otherwise start back at 1
																					@cur_rank := IF(@cur_state = storeState, @cur_rank + 1, 1) AS Rank, 
																					@cur_state := storeState,
																					@units := amountSold AS units
																					-- In order to get the correct ranking order a Subquery that orders by State and amount sold in descending order is needed
																					FROM  (	SELECT product_ID, amountSold, store_ID, storeState
																							FROM sales INNER JOIN store ON store.ID = sales.store_ID
																							ORDER BY storeState, amountSold DESC)
																					AS top_items) 
																			AS rankings INNER JOIN product ON upc = product.ID
																			-- Cap the ranking at the top 20 items
																			WHERE rank <= 20;");
												if ($result->num_rows > 0) 
												{
													while($row = $result->fetch_assoc())
													{
														echo "<tr class=\"row100 head\"><td class=\"cell100 column1\">" . $row["Rank"] . "</td><td class=\"cell100 column3\">" . $row["Product"] . "</td><td class=\"cell100 column3\">" . $row["Units Sold"] . "</td><td class=\"cell100 column4\">" . $row["Store"] . "</td></tr>"; 
													}		
													$conn-> close(); 
												}
												else
												{
													echo "<tr class=\"row100 head\"><td class=\"cell100 column1\">" . "There is no Data Found";
												}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<table style="width:100%">
						<tr>
							<th style="color:black; font-size: 150%">What are the 5 stores with the most sales so far this year?</th>
						</tr>
				</table>
				<div class="limiter">
					<div class="container-table100">
						<div class="wrap-table100">
							<div class="table100 ver1 m-b-110">
								<div class="table100-head">
									<table>
										<thead>
											<tr class="row100 head">
												<th class="cell100 column1">Store Name</th>
												<th class="cell100 column2">Total Units Sold</th>
												<th class="cell100 column2">Product Type</th>
											</tr>
										</thead>
									</table>
								</div>
			
								<div class="table100-body js-pscroll">
									<table>
										<tbody>
											<?php
												$servername = "coffee-gave-me-gas.cgzqmhf3sjbn.us-east-2.rds.amazonaws.com";
												$username = "root";
												$password = "csc4112018";
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
													$sql = "SELECT storeName as StoreName, SUM(amountSold) as TotalUnitsSold, productType as Type
															FROM store INNER JOIN sales ON store.ID = sales.store_ID
															WHERE amountSold >0
															GROUP BY store_ID
															ORDER BY SUM(amountSold) DESC
															LIMIT 5;";

													$result = $conn-> query($sql);
													while($row = $result->fetch_assoc())
													{
														echo "<tr class=\"row100 head\"><td class=\"cell100 column1\">" . $row["StoreName"] . "</td><td class=\"cell100 column2\">" . $row["TotalUnitsSold"] . "</td><td class=\"class100 column3\">" . $row["Type"] . "</td></tr>"; 
													}		
													$conn-> close(); 
												}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<table style="width:100%">
						<tr>
							<th style="color:black; font-size: 150%">In how many stores do Outdoor products outsell Livingroom products?</th>
						</tr>
				</table>		
				<div class="limiter">
					<div class="container-table100">
						<div class="wrap-table100">
							<div class="table100 ver1 m-b-110">
								<div class="table100-head">
									<table>
										<thead>
											<tr class="row100 head">
												<th class="cell100 column1">Store Name</th>
												<th class="cell100 column2">Type</th>
												<th class="cell100 column3">Units Sold</th>
											</tr>
										</thead>
									</table>
								</div>
								<div class="table100-body js-pscroll">
									<table>
										<tbody>
											<?php
												$servername = "coffee-gave-me-gas.cgzqmhf3sjbn.us-east-2.rds.amazonaws.com";
												$username = "root";
												$password = "csc4112018";
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
															echo "<tr class=\"row100 head\"><td class=\"cell100 column1\">" . $row["StoreName"] . "</td><td class=\"cell100 column1\">" . $row["Type"] . "</td><td class=\"cell100 column1\">" . $row["Sold"] ."</td></tr>"; 
														}		
													$conn-> close(); 
												}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<table style="width:100%">
						<tr>
							<th style="color:black; font-size: 150%">What are the top 3 types of products that customers buy alongside bedroom products?</th>
						</tr>
				</table>
				<div class="limiter">
					<div class="container-table100">
						<div class="wrap-table100">
							<div class="table100 ver1 m-b-110">
								<div class="table100-head">
									<table>
										<thead>
											<tr class="row100 head">
												<th class="cell100 column1">Type</th>
											</tr>
										</thead>
									</table>
								</div>
								<div class="table100-body js-pscroll">
									<table>
										<tbody>
											<?php
												$servername = "coffee-gave-me-gas.cgzqmhf3sjbn.us-east-2.rds.amazonaws.com";
												$username = "root";
												$password = "csc4112018";
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
															echo "<tr class=\"row100 head\"><td class=\"cell100 column1\">" . $row["Type"] . "</td></tr>"; 
														}		
													$conn-> close(); 
												}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
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
	
	
<!--===============================================================================================-->	
<script src="Table/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Table/vendor/bootstrap/js/popper.js"></script>
	<script src="Table/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Table/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Table/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="js/fancySelect.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>