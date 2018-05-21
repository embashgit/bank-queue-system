<?php 
include ('../connect.php');
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
		<div align="center"><h1>Customer records</h1></div>
		<div class="container">
		<table style="width:100%">
		  <tr>
		  	<th>S/N</th>
		    <th>CUSTOMERS NAME</th>
		    <th>C/LASTNAME</th> 
		    <th>E-mail</th>
		    <th>CATEGORY</th>
		    <th>STAFF ON DUTY</th>
		    <th>DATE</th>
		  </tr>
		  <?php
		   $sql = 'SELECT * FROM history';
          $retval = mysqli_query($con, $sql );
          if(! $retval ) {
          die('Could not get data: ' . mysql_error($con));

          }
            $counter=1;
          while($row = mysqli_fetch_assoc( $retval)) {
              $count = $counter++;

              $catName = mysqli_query($con, "SELECT * FROM `category` where id ='".$row['category_id']."'");
              $catresult = mysqli_fetch_assoc($catName);

			$attendname = mysqli_query($con, "SELECT * FROM `attendant` where id ='".$row['attendant_id']."'");
              $attendresult = mysqli_fetch_assoc($attendname);              
 		?>
		  <tr>
		  	<td><?php echo $count ?></td>
		    <td><?php echo $row['fname'];?></td>
		    <td><?php echo $row['lname'];?></td> 
		    <td><?php echo $row['email'];?></td>
		    <td><?php echo $catresult['name'];?></td>
		    <td><?php echo $attendresult['attendant_name'];?></td>
		    <td><?php echo $row['time'];?></td>
		  </tr>
		  <?php
			}
		  ?>
		</table>	
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
          <p>&copy; Bank Queue System. All rights reserved. Designed by : <a href="https://wwww.facebook.com/embash">Embash</a>.</p>
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
