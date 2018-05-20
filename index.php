

<?php
include('header.php');
include 'admin/redirect.php';
?>
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Welcome to Federal University Dutse <br>Micro Finance Bank</h1>
						<p>A Computerized queuing system that automate the queuing <br>services of federal university dutse Micro finance Bank</p>
					</header>
					<a href="#main" class="button big scrolly">Get Started</a>
				</div>
			</section>
		
	<div  id="main" class=" wrapper style1">
	
	

		<div align="center" class="Deposite" >

			<form method="Post" action="dashboard.php">

			<h2 style="color: #1e88e5">Please select category of Action</h2>
				<div class="select-wrapper 6u$ 12u$(xsmall)">
											
				<select name="category" id="category">
					<option value="">-Category-</option>
					<option value="1">Cash Deposition</option>
					<option value="2">Customer Care</option>
					<option value="3">Bulk Withdrawal</option>
					<option value="4">mint Purchase</option>
				</select>

			</div>

				<div align="center">
                    <input type="submit" name="button" id="button" value="Login">
                </div>
				
			</form>
			
		</div>
		


</div>
		<!-- Main -->

	

		<!-- Footer -->
			<footer id="footer">
        <div class="copyright">
          <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
          </ul>
          <p> Bank Queue Management System &copy;<a href="https://wwww.facebook.com/embash">Embashcardon IT world</a>.</p>
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