<?php
include_once 'C:\xampp\htdocs\Car_Parking\Config\dbconfig.php';
if(isset($_POST['submit']))
{
 $car = $_POST['car'];
 $plate = $_POST['plate'];
 $ParkingId = $_POST['parkingid'];
 $Driverid = $_POST['driverid'];
 if($crud->Book_Parking($Driverid,$car,$plate,$ParkingId))
 {
  header("Location: ../Driver_Dashboard/Parking_Reply.php");
 }
 else
 {
  header("Location: ../Driver_Dashboard/Parking_Reply");
 }
}
?>