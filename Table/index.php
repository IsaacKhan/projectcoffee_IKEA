<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ikea - Products</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
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
											$sql = "SELECT productName, productType, productPrice, productBrand, productDescription FROM product";
											$result = $conn-> query($sql);
											echo "<table>";
												while($row = $result->fetch_assoc())
												{
													echo "<tr class=\"cell100 column5\"><td class=\"cell100 column1\">" . $row["productName"] . "</td><td class=\"cell100 column2\">" . $row["productType"] . "</td><td class=\"cell100 column3\">" . $row["productPrice"] . "</td><td class=\"cell100 column4\">" . $row["productBrand"] . "</td><td class=\"cell100 column5\">" . $row["productDescription"] . "</td></tr>"; 
												}
											echo "</table>";
					
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

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
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

</body>
</html>