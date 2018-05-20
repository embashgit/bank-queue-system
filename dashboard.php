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
<?php
session_start();
$category=$_POST['category'];


?>


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
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
			</nav>
		<!-- Banner -->
			<section >
				
			</section>
<div class="container">
	<?php 
				$result = mysqli_query($con, "SELECT * from category where id='".$category."' ") or die(mysqli_error($con));
				$description =  mysqli_fetch_array($result);
			
			?>
	<div class="large-"></div>
	<div style=" " class="col-md-6">
	
		<div align="center" style=" background: #424242; border-radius: 5px;  border-bottom :8px solid #757575; margin-top:30px;  class="align-center 6u$ 12u$(xsmall)" >

		<div  class="board " style="background: #424242;border-radius: 5px; border-bottom: 8px solid #e0e0e0; padding: 10px; margin: 0px" ><a  value="Cash Deposit"  href="deposite.php"><h1 style="color: #42a5f5"><?php echo $description['name']." Dashboard "; ?></h1></a>
			<h3><?php echo $description['description'] ?></h3>
		</div>


		
		</div>

	</div>
</div>
		<!-- Main -->
<div id="main" class="wrapper style1">
				
	<div class="inner">

	<header class="align-center">
		<script type="text/javascript">
			function message($message){

				 <?php if (empty($message)){
			
				}else{
					echo $message;
				}?>
			}
		</script>
		</header>

	<!-- Content -->
		
		</div>			
<?php 
//Enquiry Category
if( $category == '2'){ ?>

<div class="row">
	<div class=""  style=" margin-left: 30%">
	<div class="col align-center">
			<h1 style="color: #42a5f5">Please enter your Credentials</h1>
					<form method='POST' action="">
				<div class="row uniform">
					<div class="6u 12u$(xsmall)">
						<input type="text" name="fname" id="fname"  placeholder=" first Name" />
					</div>
					<div class="6u$ 12u$(xsmall)">
						<input type="text" name="lname" id="lname"  placeholder="last name" />
					</div>
					<input type="hidden" name="category" value="2">
					<!-- Break -->
					
					</div>
					<br>
					<div class="12u$">

					<input type="email" name="email" id="email"  placeholder="Email" />
					
					</div>
					
					<br>
					<!-- Break -->
					<div class="12u$">
						<ul class="actions">
							
							<li><input type="submit" name="submit" id="subm" value=" join Queue" /></li>
							
						</ul>
					</div>
			
			
</form>

	</div>

</div>
</div>
<?php } 
//Cash Deposition Category
if( $category == '1'){ ?>

<div class="row">
	<div class=""  style=" margin-left: 30%">
	<div class="col align-center">
			<h1 style="color: #42a5f5">Please enter your Credentials</h1>
					<form method='POST' action="">
				<div class="row uniform">
					<div class="6u 12u$(xsmall)">
						<input type="text" name="fname" id="fname"  placeholder=" first Name" />
					</div>
					<div class="6u$ 12u$(xsmall)">
						<input type="text" name="lname" id="lname"  placeholder="last name" />
					</div>
					<input type="hidden" name="category" value="1">
					<!-- Break -->
					
					</div>
					<br>
					<div class="12u$">

					<input type="email" name="email" id="email"  placeholder="Email" />
					
					</div>
					
					<br>
					<!-- Break -->
					<div class="12u$">
						<ul class="actions">
							
							<li><input type="submit" name="submit" id="subm" value=" join Queue" /></li>
							
						</ul>
					</div>
			
			
</form>

	</div>

</div>
</div>
<?php } 

//Bulk withdrawal category
if( $category == '3'){ ?>

<div class="row">
	<div class=""  style=" margin-left: 30%">
	<div class="col align-center">
			<h1 style="color: #42a5f5">Please enter your Credentials</h1>
					<form method='POST' action="">
				<div class="row uniform">
					<div class="6u 12u$(xsmall)">
						<input type="text" name="fname" id="fname"  placeholder=" first Name" />
					</div>
					<div class="6u$ 12u$(xsmall)">
						<input type="text" name="lname" id="lname"  placeholder="last name" />
					</div>
					<input type="hidden" name="category" value="3">
					<!-- Break -->
					
					</div>
					<br>
					<div class="12u$">

					<input type="email" name="email" id="email"  placeholder="Email" />
					
					</div>
					
					<br>
					<!-- Break -->
					<div class="12u$">
						<ul class="actions">
							
							<li><input type="submit" name="submit" id="subm" value=" join Queue" /></li>
							
						</ul>
					</div>
			
			
</form>

	</div>

</div>
</div>
<?php } 
//mint category
if( $category == '4'){ ?>

<div class="row">
	<div class=""  style=" margin-left: 30%">
	<div class="col align-center">
			<h1 style="color: #42a5f5">Please enter your Credentials</h1>
					<form method='POST' action="">
				<div class="row uniform">
					<div class="6u 12u$(xsmall)">
						<input type="text" name="fname" id="fname"  placeholder=" first Name" />
					</div>
					<div class="6u$ 12u$(xsmall)">
						<input type="text" name="lname" id="lname"  placeholder="last name" />
					</div>
					<input type="hidden" name="category" value="4">
					<!-- Break -->
					
					</div>
					<br>
					<div class="12u$">

					<input type="email" name="email" id="email"  placeholder="Email" />
					
					</div>
					
					<br>
					<!-- Break -->
					<div class="12u$">
						<ul class="actions">
							
							<li><input type="submit" name="submit" id="subm" value=" join Queue" /></li>
							
						</ul>
					</div>
			
			
</form>

	</div>

</div>
</div>
<?php } ?>
						
							
</div>
							
							
<?php
 

if(isset($_POST['submit'])){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$category = $_POST['category'];

	$_SESSION['fname'] = $fname;
	$_SESSION['lname'] = $lname;
	$_SESSION['email'] = $email;
	$_SESSION['category'] = $category;



	
	$chk_user = mysqli_query($con, "select * from customer WHERE  fname = '$fname' AND lname  ='$lname' AND email ='$email' AND category_id ='$category' ") or die(mysqli_error($con));
		
	if(mysqli_num_rows($chk_user) > 0){?>
		 <script type="text/javascript">alert("Sorry you are already on the Queue")</script>
		  
	<?php
	}else{
		function checkCartegory($category)
	{
		switch ($category) {
			case '1':
				
				$qnumber = $_SESSION['Dqueue']++;
				if ($qnumber==0) {
					$qnumber =  $_SESSION['Dqueue']++;
				}
				break;
			case '2':
				
				$qnumber = $_SESSION['Equeue']++;
				if ($qnumber ==0) {
					$qnumber =  $_SESSION['Equeue']++;
				}
				break;
			case '3':
				
				$qnumber = $_SESSION['Bqueue']++;
				if ($qnumber==0) {
					$qnumber +=1; 
				}
				break;
			
			default:
				$qnumber = $_SESSION['Mqueue']++;
				if ($qnumber == 0) {
					$qnumber = $_SESSION['Mqueue']++;
				}
				break;
		}

		return  $_SESSION['queue'] = $qnumber;
	}
	$qnumber = checkCartegory($category);
	$save_user = mysqli_query($con, "INSERT INTO customer (fname, lname, email, category_id, qnumber ) values ('$fname', '$lname', '$email', '$category','$qnumber')") or die(mysqli_error($con));
	if ($save_user){ ?>

<script>alert("You have successfully Join the Queue!");window.location = "waiting.php";</script>

	<?php }else{ 
		echo '<script>alert("Fail to register User");</script>';
	}
	}
	
}

?>
	<!-- Footer -->
			<footer id="footer">
        <div class="copyright">
          <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
          </ul>
          <p>&copy; Bank System. All rights reserved. Designed by : <a href="https://wwww.facebook.com/embash">Embash</a>.</p>
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