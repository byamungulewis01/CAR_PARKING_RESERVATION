<?php
include_once 'C:\xampp\htdocs\Car_Parking\Config\dbconfig.php';
if(isset($_POST['submit']))
{
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $pass = $_POST['password'];
 
 if($crud->Parking_owner($fname,$lname,$email,$pass))
 {
  header("Location: ../Sign-Up.php?inserted");
 }
 else
 {
  header("Location: ../Sign-Up.php?failure");
 }
}
?>