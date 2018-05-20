<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<?php 
		include('../connect.php');
?>
<head>
	<title>Bank Queue</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="../assets/css/main.css" />
</head>
<body class="subpage">
		<header id="header">
				<div class="logo"><a href="../admin/index.php"><strong style="font-size: 2em;
				color: #eee" >Bank Queue System</strong></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
			</nav>
<?php 
session_start();

$atndnt = $_SESSION['attemail'];
$attcat = mysqli_query($con, "SELECT * FROM `attendant` WHERE email = '$atndnt' ");
$attcatrow = mysqli_fetch_array($attcat);

$_SESSION['att'] = $attcatrow['id'];

$attcat_id = $attcatrow['category_id'];

$sql = mysqli_query($con, "SELECT * FROM `category` WHERE id='".$attcat_id."' ");
$sqlrow = mysqli_fetch_array($sql);


$user_on_queue = mysqli_query($con, "select min(qnumber) as quenumber, fname,id, lname from customer WHERE category_id ='".$attcat_id."' ");

$onqueue_row = mysqli_fetch_array($user_on_queue);

//$on_queue = $onqueue_row['quenumber'];
//$customer = mysqli_query($con, "SELECT * FROM `customer` WHERE qnumber = '$on_queue'");

//$customerow = mysqli_fetch_array($customer);
$id = $onqueue_row['id'];
?>
			<div id="main"  class="wrapper style1">
				<h1 align="center">Customers on call</h1>
				<hr>
				<div align="center">
					<div class="6u$ 12u$(small)">

				<ul  class="actions fit ">
					
					<li style="margin: 0px"><div class="col align-center ">
					<header style="background: #424242; padding: 15px; color: white; margin-bottom: 0px"><?php echo strtoupper($sqlrow['name']) ?><span style="margin-left:30%">Attendant Name : <?php echo $attcatrow['attendant_name']?></span>
					</header>
					<pre><code>

					<h1 align="center"><?php if($onqueue_row['quenumber']){echo $onqueue_row['quenumber'];}else{ echo "No Customer Waiting ";}?></h1>
					<p align="center"><a href="#" class="button special fit"><?php echo $onqueue_row['fname']." ".$onqueue_row['lname']; ?></a></p>
					</code>
					</pre>
				
					</div>
					
					
						
						<p align="center"><a href="callcustomer.php?customerId=<?php echo $id;?>" class="button">Call next Customer</a></p>
						

					
					</li>
				
				</ul>
				</div>
				</div>
						
		
		</div>

<footer id="footer">
        <div class="copyright">
          <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
          </ul>
          <p>&copy; BanK System. All rights reserved. Designed by : <a href="https://wwww.facebook.com/embash">Embash</a>.</p>
        </div>
 </footer>

		<!-- Scripts -->
		<script src="assets/js/jquery-1.8.2.min.js"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
</body>
</html>


<?php mysqli_close($con); ?>