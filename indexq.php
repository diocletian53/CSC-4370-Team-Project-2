<?php session_start(); /* Starts the session */

if(!isset($_SESSION['username'].$_SESSION['password'])){
	header("location:login.php");
	exit;
}
?>

