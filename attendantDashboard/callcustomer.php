			
		<?php 
		include('../connect.php');

		session_start();

		$_SESSION['attemail'];
		$att = $_SESSION['att'];

		$id = $_GET['customerId'];


		$addhistory = mysqli_query($con, "SELECT * FROM customer WHERE id='".$id."' ")or die(mysqli_error($con));
		$result = mysqli_fetch_array($addhistory);
		$fname  = $result['fname'];
		$lname  = $result['lname'];
		$email  = $result['email'];
		$category  = $result['category_id'];
		

		$saveHistory = mysqli_query($con, "INSERT INTO history (fname, lname, email, category_id, Attendant_id, time ) values ('$fname', '$lname', '$email', '$category', '$att', now())") or die(mysqli_error($con));

			if ($saveHistory) {

			mysqli_query($con, "DELETE FROM customer WHERE id ='".$id."' ") or die(mysqli_error($con));

				echo '<script type="text/javascript">alert("New Customer on board");window.location=\'index.php\';</script>';

				}else{

				echo '<script type="text/javascript">alert("Fail to call new Customer ");window.location=\'index.php\';</script>';

				}

		 ?>
