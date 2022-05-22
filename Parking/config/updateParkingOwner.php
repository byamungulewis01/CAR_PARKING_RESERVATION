<?php
include_once 'C:\xampp\htdocs\Car_Parking\Config\dbconfig.php';
if(isset($_POST['submit']))
{
 $id = $_POST['id'];
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $pass = $_POST['password'];
 
 if($crud->updateParkingOwner($id,$fname,$lname,$email,$pass))
 {
  header("Location: ../Parking_Dashboard/My_Account.php?inserted");
 }
 else
 {
  header("Location: ../Parking_Dashboard/My_Account.php?failure");
 }
}
?>