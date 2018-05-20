<?php
session_start();

if($_SESSION['admin']==''){
	//send user to admin login
	header('location:admin.php');
}
?>