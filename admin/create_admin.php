		<?php
		include('../connect.php');
		include ('testInput.php');

		$lnameErr = $fnameErr = $emailErr = $passwordErr = $passwErr = "";
		$fname = $lname = $email = $password = $save_user = "";

		if(isset($_POST['submit'])){

		if(empty($_POST['fname'])){
			$fnameErr = " Name is Required";
		}else{
		$fname = test_input($_POST['fname']);		
		}
		if(empty($_POST['lname'])){
			$lnameErr = " last Name is Required";
		}else{
		$lname = test_input($_POST['lname']);		
		}

		if(empty($_POST['email'])){

			$emailErr = " Email is Required";
		}else{
		$email = test_input($_POST['email']);		
		}
		if (($_POST['password']!=$_POST['passw']) || empty($_POST['password'])) {
		
		$passwordErr = "Incorrect Password";
		
		}else{

		$password =md5($_POST['password']);
	
		}
		$chk_user = mysqli_query($con, "select * from admin WHERE  fname  ='$fname' AND email ='$email' ") or die(mysqli_error($con));
	
	if(mysqli_num_rows($chk_user) > 0|| $fnameErr||$emailErr||$passwordErr||$lnameErr){
	

	}else{

		$save_user = mysqli_query($con, "INSERT INTO admin (fname, lname, email, password ) values ('$fname','$lname','$email','$password')") or die(mysqli_error($con));
	}
		
		if ($save_user) {
			
			echo '<script>alert("A New Admin Staff Added Successfully!");window.location = "index.php";</script>';
		}else{ 

			echo '<script type="text/javascript">alert("Failed to create new Admin ")</script>';

		}
	}
		?>
<head>
	<title>Bank Queue</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="../assets/css/main.css" />
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
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
			</nav>

	<div id="main" class="wrapper style1">

		<div class="row">

			<div class=""  style=" margin-left: 30%">
					<div class="col align-center">
							<h1>Register new Admin</h1>
							<br>	
							<form method='POST' action="">
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="fname" id="fname"  placeholder=" first Name" /><span style="color:red"><?php echo $fnameErr?></span>
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="lname" id="lname"  placeholder="last name" /><span style="color:red"><?php echo $lnameErr?></span>
									</div>
									
									<br>
									<div class="12u$">

									<input type="email" name="email" id="email"  placeholder="Email" /><span style="color:red"><?php echo $emailErr?></span>
									
									</div>
									<br>	
									<div class="12u$">

									<input type="password" name="password" minlength="6" id="password"  placeholder="Enter Password" /><span style="color:red"><?php echo $passwordErr?></span>
									
									</div>
									<br>	
									<div class="12u$">

									<input type="password" name="passw" minlength="6" id="password"  placeholder="Confirm Password" /><span style="color:red"><?php echo $passwErr?></span>
									
									</div>
									<br>
									
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
