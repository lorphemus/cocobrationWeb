<?php
ob_start();
session_start();

if(isset($_SESSION['user_mail'])){
	header("Location:home.php");
	exit();
}else{
	header("Location:login.php");
}

?>