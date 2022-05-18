<?php
session_start();
include_once 'C:\xampp\htdocs\Car_Parking\Config\dbconfig.php';
if(isset($_POST['submit']))
{
 $email = $_POST['email'];
 $pass = $_POST['password'];
 
 if($crud->Login_Driver($email,$pass))
 {
    $_SESSION['driver']=$_POST['email'];
  header("Location: ../Driver_Dashboard/index.php");
 }
 else
 {
  header("Location: ../index.php?failure");
 }
}
?>