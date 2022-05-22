<?php
session_start();
include_once 'C:\xampp\htdocs\Car_Parking\Config\dbconfig.php';
if(isset($_POST['submit']))
{
 $email = $_POST['email'];
 $pass = $_POST['password'];
 
 if($crud->Login_Parking_Owner($email,$pass))
 {
    $_SESSION['parking_owner']=$_POST['email'];
  header("Location: ../Parking_Dashboard/index.php");
 }
 else
 {
  header("Location: ../index.php?failure");
 }
}
?>