<?php
include_once 'C:\xampp\htdocs\Car_Parking\Config\dbconfig.php';
if(isset($_POST['submit']))
{
 $id = $_POST['id'];
 $P_name = $_POST['P_name'];
 $P_Location = $_POST['P_Location'];
 $P_Size = $_POST['P_Size']; 
 if($crud->updateParking($id,$P_name,$P_Location,$P_Size))
 {
  header("Location: ../Parking_Dashboard/My_Parking.php?inserted");
 }
 else
 {
  header("Location: ../Parking_Dashboard/My_Parking.php?failure");
 }
}
?>