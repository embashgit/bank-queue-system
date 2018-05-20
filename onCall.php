<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<?php 
	include('connect.php');
?>
<head>
	<title>Bank Queue</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="subpage">
		<header id="header">
				<div class="logo"><a href="index.php"><strong style="font-size: 2em;
				color: #eee" >Bank Queue System</strong></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="admin/addAttendant.php">Add Attendant</a></li>
					<li><a href="index.php">Attendants</a></li>
				</ul>
			</nav>
			<?php 
					
			$depositeid = 1;
			$enquiryid = 2;
			$bulkid = 3;
			$mintid = 4;

		// 1 GET THE depositing CUSTOMER ON CALL
			$depositing = mysqli_query($con, "select fname, lname, MIN(qnumber) as quenumber from customer WHERE category_id = '$depositeid' ");
			$depositingrow = mysqli_fetch_array($depositing);

			//get the Depositing category name
			$category= mysqli_query($con, "SELECT * from category where id='".$depositeid."' ") or die(mysqli_error($con));
			$catrow =  mysqli_fetch_array($category);

			//2 GET THE enguire CUSTOMER ON CALL
			$enquirer = mysqli_query($con, "select fname, lname, MIN(qnumber) as quenumber from customer WHERE category_id = '$enquiryid' ");
			$enquirerow = mysqli_fetch_array($enquirer);

			//get the enquiry category name
			$enquiry= mysqli_query($con, "SELECT * from category where id='".$enquiryid."' ") or die(mysqli_error($con));
			$enquiryrow =  mysqli_fetch_array($enquiry);

			// 3GET THE bulk CUSTOMER ON CALL
			$withdrawer = mysqli_query($con, "select fname, lname, MIN(qnumber) as quenumber from customer WHERE category_id = '$bulkid' ");
			$withdrawerow = mysqli_fetch_array($withdrawer);

			//get the bulk category name
			$bulk= mysqli_query($con, "SELECT * from category where id='".$bulkid."' ") or die(mysqli_error($con));
			$bulkrow =  mysqli_fetch_array($bulk);

			//4 GET THE minting CUSTOMER ON CALL
			$minting = mysqli_query($con, "select fname, lname, MIN(qnumber) as quenumber from customer WHERE category_id = '$mintid' ");
			$mintingrow = mysqli_fetch_array($minting);

			//get the minting category name
			$mint= mysqli_query($con, "SELECT * from category where id='".$mintid."' ") or die(mysqli_error($con));
			$mintcat =  mysqli_fetch_array($mint);


			?>
			<div id="main" class="wrapper style1">
				<h1 align="center">Customer on call</h1>
				<hr>
				<ul class="actions fit">
					<?php for ($i=1; $i<=4; $i++) { ?> 

					<li style="margin: 0px"><div class=" ">
					<header style="background: #424242; padding: 15px; color: white; margin-bottom: 0px">Category:<?php 

								switch ($i) {
									case '1':
										echo $catrow['name'];
										break;

										case '2':
										echo $enquiryrow['name'];
										break;

										case '3':
										echo $bulkrow['name'];
										break;
									
									default:
										echo $mintcat['name'];	
									break;
								}
							
					?>
					</header>
					<pre><code>

					<?php
					switch ($i) {
									case '1':

										echo '<h1 align="center">NO.'. $depositingrow['quenumber'];?></h1>

									<p align="center"><a href="#" class="button special fit"><?php echo $depositingrow['fname']." ".$depositingrow['lname'];?></a></p>
										<?php break;

										case '2':
										echo '<h1 align="center">NO'. $enquirerow['quenumber'];?></h1>

										<p align="center"><a href="#" class="button special fit"><?php echo $enquirerow['fname']." ".$enquirerow['lname'];?></a></p>


										<?php break;

										case '3':
										echo '<h1 align="center">NO'. $withdrawerow['quenumber'];?></h1>

									<p align="center"><a href="#" class="button special fit"><?php echo $withdrawerow['fname']." ".$withdrawerow['lname'];?></a></p>


										<?php break;
									
									default:
										echo '<h1 align="center">NO'. $mintingrow['quenumber'];?></h1>	
									<p align="center"><a href="#" class="button special fit"><?php echo $mintingrow['fname']." ".$mintingrow['lname'];?></a></p>

									<?php break;
								}?>

					</code>
					</pre>
				
					</div>
					
					</li>
					<?php } ?>
				</ul>
					
					
					
					

				
				
		
		
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