<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no">
	
	<title>Elegantic</title>
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
				<a class="menu_trigger" href="#">menu</a>
				<div class="bar-holder">
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

			<section class="bar">
				<div class="bar-frame">
					<ul class="breadcrumbs">
						<li><a href="home_page.php">Home</a></li>
						<li>Outdoor</li>
					</ul>
				</div>
			</section>

			<section id="main">
				<div class="limiter">
					<div class="container-table100">
						<div class="wrap-table100">
							<div class="table100 ver3 m-b-110">
								<div class="table100-head">
									<table>
										<thead>
											<tr class="row100 head">
												<th class="cell100 column1">Product Name</th>
												<th class="cell100 column2">Type</th>
												<th class="cell100 column3">Price</th>
												<th class="cell100 column4">Brand</th>
												<th class="cell100 column5">Desciption</th>
											</tr>
										</thead>
									</table>
								</div>
			
								<div class="table100-body js-pscroll">
									<table>
										<tbody>
												<?php
												$conn = new mysqli("coffee-gave-me-gas.cgzqmhf3sjbn.us-east-2.rds.amazonaws.com", "root", "csc4112018", "projectcoffee");
										
												$sql = "SELECT productName, productType, productPrice, productBrand, productDescription FROM product WHERE productType=\"Outdoor\"";
												$result = $conn-> query($sql);

												if ($result->num_rows > 0) 
												{
													while($row = $result->fetch_assoc())
													{
														echo "<tr class=\"cell100 column5\"><td class=\"cell100 column1\">" . $row["productName"] . "</td><td class=\"cell100 column2\">" . $row["productType"] . "</td><td class=\"cell100 column3\">" . $row["productPrice"] . "</td><td class=\"cell100 column4\">" . $row["productBrand"] . "</td><td class=\"cell100 column5\">" . $row["productDescription"] . "</td></tr>"; 
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
	<script type="text/javascript" src="Table/js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="Table/js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="Table/js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="Table/js/fancySelect.js"></script>
	<script type="text/javascript" src="Table/js/main.js"></script>
</body>
</html>