		<?php 
		include('../connect.php');
		$nameErr = $emailErr = $categoryErr  = $passwordErr = "";
		$message = $name = $email =$category= $password = $passw = "";

		include('testInput.php');
		session_start();

		?>
<head>
	<title>Bank Queue</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="../assets/css/main.css" />
</head>
<body class="subpage">

	<?php
	
	if(isset($_POST['submit'])){


		if(empty($_POST['attendant_name'])){
			$nameErr = " Name is Required";
		}else{
		$name = test_input($_POST['attendant_name']);		
		}

		if(empty($_POST['email'])){
			$emailErr = " Email is Required";
		}else{
		$email = test_input($_POST['email']);		
		}

		if(empty($_POST['category'])){
			$categoryErr = "Category is Required";
		}else{
		$category = test_input($_POST['category']);		
		}
		
		if (($_POST['password']!=$_POST['passw']) || empty($_POST['password'])) {
		
		$passwordErr = "Incorrect Password";
		
		}else{

		$password =md5($_POST['password']);
	
		}


		$_SESSION['attname'] = $name;
		$_SESSION['attemail'] = $email;
		$_SESSION['attcategory'] = $category;



	
	$chk_user = mysqli_query($con, "select * from attendant WHERE  attendant_name  ='$name' AND email ='$email' AND category_id ='$category' ") or die(mysqli_error($con));
	
	if(mysqli_num_rows($chk_user) > 0|| $nameErr||$emailErr||$passwordErr||$categoryErr){
	

	}else{

		$save_user = mysqli_query($con, "INSERT INTO attendant (attendant_name, email, category_id, password ) values ('$name','$email', '$category','$password')") or die(mysqli_error($con));


	if ($save_user){ ?>
		
		<script>alert(" A new Staff has been added");window.location = "index.php";</script>

	<?php }else{ 
		echo '<script type="text/javascript">alert("Failed to create new staff ")</script>';
	}
	}
	
}?>
		<header id="header">
				<div class="logo"><a href="index.php"><strong style="font-size: 2em;
				color: #eee" >Bank Queue System</strong></a></div>

				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="Attendant Login">Attendant Login</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
			</nav>

	<div id="main" class="wrapper style1">

		<div class="row">

			<div class=""  style=" margin-left: 30%">
					<div class="col align-center">
						<h2 style="background: #81c784"><?php echo $message ?></h2>
							<h1>Register new Attendant</h1>
							<br>	
							<form method='POST' action="">
								<div class="row uniform">
								
								
									<div class="12u$">

									<input type="text" name="attendant_name" id="attendant_name"  placeholder="Enter Full Name" /><span style="color:red"><?php echo $nameErr?></span>
									
									</div>
									
									<div class="12u$">

									<input type="email" name="email" id="email"  placeholder="Enter email" /><span style="color:red"><?php echo $emailErr?></span>
									
									</div>
									<br>	
									<div class="12u$">

									<input type="password" name="password" minlength="6" id="password"  placeholder="Enter Password" /><span style="color:red"><?php echo $passwordErr?></span>
									
									</div>
									<br>	
									<div class="12u$">

									<input type="password" name="passw" minlength="6"  placeholder="Confirm Password" />
									
									</div>
									<br>
									<div class="select-wrapper 12u$(xsmall)">
											
										<select name="category" id="category">
											<option value="">-Category-</option>
											<option value="1">Cash Deposition</option>
											<option value="2">Customer Care</option>
											<option value="3">Bulk Withdrawal</option>
											<option value="4">mint Purchase</option>
										</select><span style="color:red;"<?php echo $categoryErr?></span>

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
