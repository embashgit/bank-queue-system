		<?php 
		include('connect.php');
		session_start();
		?>
		<title>Bank Queue</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.php"><strong style="font-size: 2em;
				color: #eee" >Bank Queue System</strong></a></div>
				
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="admin/index.php">Admin</a></li>
					<li><a href="onCall.php">On Call</a></li>
				</ul>
			</nav>
		<!-- Banner -->
			<section >
				
			</section>
<div class="container">
	<div class="large-"></div>
	<div style=" " class="col-md-6">
	
		

	</div>
</div>
<?php 
$id = $_SESSION['category'];

$row = mysqli_query($con, "select * from category WHERE  id = '$id' ") or die(mysqli_error($con));
$result = mysqli_fetch_array($row);

$customer_email = $_SESSION['email'];
$customer = mysqli_query($con, "select * from customer WHERE email = '$customer_email' ") or die(mysqli_error($con));
$cost = mysqli_fetch_array($customer);

 $NGtimezone = new DateTimeZone('GMT' );
$currentDateTime = new DateTime( date('Y-m-d H:i:s'), $NGtimezone);
 ?> 
		<!-- Main -->
<div id="main">
				<section class="wrapper style1">
					 <p align="right"><a href="onCall.php" class="button special">Customers on call</a></p>
							<div  align="center" >
									<div id="printableArea"  class=" col 6u$ 12u$(small)">
										<header style="background: #424242;padding: 10px; color: white; margin-bottom: 0px"><?php echo " WAITING FOR ".strtoupper($result['name']); ?> <span style="margin-left: 40%">Time: <?php echo $currentDateTime->format('M-l g:i:s');?></span></header>
										<table style="width:100%">
										  <tr>
										    <th>Name:</th>
										    <td><h3><?php echo strtoupper($_SESSION['fname']). " ".strtoupper($_SESSION['lname']) ?></h3></td>
										  </tr>
										  <tr>
										    <th>Email:</th>
										    <td><h4></h4><?php echo $customer_email; ?></td>
										  </tr>
										  <tr>
										    <th>Number on Queue:</th>
										    <td><h2><strong><?php echo $cost['qnumber']; ?></strong></h2></td>
										  </tr>
										  <tr>
										 <th><a href="index.php"><button id="myBtn" class="button">Quit</button></a></th>

										  	<td 	align="right" ><button onclick="printDiv('printableArea')"	 class="button special ">print slip</button></td>
										  	
										  </tr>
										  <tr>
										  
										  </tr>
										  
										</table>

									</div>
										<p>www.fudmicrofinance.com &copy;2018</p>
							</div>
							<script>
							   function printDiv(divName) {

							     var printContents = document.getElementById(divName).innerHTML;

							     var originalContents = document.body.innerHTML;

							     document.body.innerHTML = printContents;

							     window.print();

							     document.body.innerHTML = originalContents;
							}
							  </script>
						
							</div>
							
							
							
						<hr class="major" />

</code></pre>

							</div>
						</div>
					</div>
				</section>
			</div>

		<!-- Footer -->
			<footer id="footer">
        <div class="copyright">
          <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
          </ul>
          <p>&copy; Authentication System. All rights reserved. Designed by : <a href="https://wwww.facebook.com/embash">Embash</a>.</p>
        </div>
      </footer>

		<!-- Scripts -->
		<script src="assets/js/bootstrap.js"></script>
	
		<script src="assets/js/jquery-1.8.2.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>