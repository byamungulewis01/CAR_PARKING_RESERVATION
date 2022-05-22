<?php
include_once 'C:\xampp\htdocs\Car_Parking\Config\dbconfig.php';
if(isset($_POST['submit']))
{
 $p_name = $_POST['p_name'];
 $p_location = $_POST['p_location'];
 $space = $_POST['space'];
  $owner = $_POST['owner'];
 if($crud->create_parking($p_name,$p_location,$space,$owner))
 {
  header("Location: ../Parking_Dashboard/Add_Parking.php?inserted");
 }
 else
 {
  header("Location: ../Parking_Dashboard/Add_Parking.php?failure");
 }
}
?>