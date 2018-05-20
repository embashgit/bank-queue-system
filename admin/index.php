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
				<div class="logo"><a href="../index.php"><strong style="font-size: 2em;
				color: #eee" >Bank Queue System</strong></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="admin/addAttendant.php">Add Attendant</a></li>
					<li><a href="attendantDashboard/index.php">Attendants</a></li>
				</ul>
			</nav>

	<div id="main" class="wrapper style1">

		<div class="container">
			<div class="flex flex-4">
					<div style="">
						<a href="add_attendant.php"><div style="margin-bottom: 10px"><img src="../images/attendant.png" width="150" height="150"></div>
						<button class="button">Add Attendant</button></a>
					</div>
				
					<div style="">
						<a href="../attendantDashboard/attendantlogin.php"><div><img style="margin-right: 40px" src="../images/login.png" height="150" width="200"></div>
						<button class="button">Login as Attendant</button></a>
					</div>
					<div style="">
						<a href="create_admin.php"><div><img src="../images/administrator.png" height="150" width="150"></div>
						<button class="button">Add Administrator </button></a>
					</div>
					<div style="">
						<a href="history.php"><div><img src="../images/History.png" height="150" width="150"></div>
						<button class="button">View Customers History</button></a>
					</div>
			</div>
			<div style="margin-top: 80px" class="flex flex-3">
					<div style="">
						<a href="logout.php"><div style="margin-bottom: 10px"><img src="../images/logout.png" width="150" height="150"></div>
						<button class="button">Close Bank queue</button></a>
					</div>

					<div style="">
						<a href="../index.php"><div style="margin-bottom: 10px"><img src="../images/Bank-icon.png" width="150" height="150"></div>
						<button class="button">Customer Dashboard</button></a>
					</div>
				
					<div style="">
						<a href="../onCall.php"><div><img style="margin-right: 40px" src="../images/customers.png" height="150" width="200"></div>
						<button class="button">Customers on Call</button></a>
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
