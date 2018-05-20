		<?php 
		include('connect.php');
		$emailErr = $passwordErr = "";
		session_start();
		include('testInput.php');
		if(isset($_POST['login'])){
		if(empty($_POST['email'])){
			$emailErr = " Email is Required";
		}else{
		$email = test_input($_POST['email']);		
		}

		if(empty($_POST['password'])){
			$passwordErr = "Password is Required";
		}else{
		$password = md5(test_input($_POST['password']));		
		}
	
		$login = mysqli_query($con, "select * from admin WHERE email = '$email' AND password = '$password'") or die(mysqli_error($con));
		if ($login) {
			$_SESSION['admin'] = $email;
			echo '<script>alert("Login Successfully!");window.location = "admin/index.php";</script>';
			# code...
		}
	}
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
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
			</nav>

		<div id="main" class="wrapper style1">

		<div class="row">

			<div class=""  style=" margin-left: 40%">
					<div class="col align-center">
							<h1>Admin Login</h1>
							<br>	
							<form method='POST' action="">
								<div class="row uniform">
									
									<br>
									<div class="12u$">

									<input type="email" name="email" id="email"  placeholder="Email" /><span style="color:red"><?php echo $emailErr ?></span>
									
									</div>
									<br>	
									<div class="12u$">

									<input type="password" name="password" minlength="6" id="password"  placeholder="Enter Password" /><span style="color:red"><?php echo $passwordErr ?></span>
									
									</div>
									<br>	
									
									<br>
									<!-- Break -->
									<div class="12u$">
										<ul class="actions">
											
											<li><input type="submit" name="login" id="subm" value=" Login" /></li>
											
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
