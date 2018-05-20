<?php
include('../connect.php');
	session_start();
	session_destroy();
	mysqli_query($con, "TRUNCATE TABLE customer") or die(mysqli_error($con));
	header('Location: ../index.php');
?>
