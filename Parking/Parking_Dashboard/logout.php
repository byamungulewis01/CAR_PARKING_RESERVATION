<?php 
session_start();
	session_destroy();
	if ($_SESSION['parking_owner']) {
	header("location:../index.php");
}
 ?>