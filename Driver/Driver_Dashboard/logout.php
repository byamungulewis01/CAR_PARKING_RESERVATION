<?php 
session_start();
	session_destroy();
	if ($_SESSION['driver']) {
	header("location:../index.php");
}
 ?>