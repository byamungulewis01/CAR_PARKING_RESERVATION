<?php
include_once 'C:\xampp\htdocs\Car_Parking\Config\dbconfig.php';
                if (isset($_GET['id'])) {
                  $id =$_GET['id'];
                  if($crud->delete($id))
 {
  header("Location: ../Parking_Dashboard/My_Parking.php?deleted");
 }

                }
                ?>