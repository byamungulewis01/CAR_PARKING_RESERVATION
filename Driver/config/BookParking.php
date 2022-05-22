<?php
include_once 'C:\xampp\htdocs\Car_Parking\Config\dbconfig.php';
if(isset($_POST['submit']))
{
 $car = $_POST['car'];
 $plate = $_POST['plate'];
 $ParkingId = $_POST['parkingid'];
 $Driverid = $_POST['driverid'];  
 $p_owner = $_POST['p_owner'];   

 $query = "SELECT * FROM datacenter WHERE Car_Plate=:plate AND Parking=:ParkingId";
 $stmt1 = $DB_con->prepare($query);
 $stmt1->execute([':plate' => $plate,':ParkingId' => $ParkingId]);
 $countRow = $stmt1->rowCount();
  if ($countRow > 0) {
    header("Location: ../Driver_Dashboard/Book_Parking.php?exist");
  } 
  
  
  else {
    $sql = 'SELECT * FROM parkings WHERE id=:ParkingId';
    $stmt = $DB_con->prepare($sql);
    $stmt->execute([':ParkingId' => $ParkingId]);
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
           $size = $row['P_Size']; 
         if ($size > 0) {
            $current = $size - 1; 
            $status=1;
            $crud->Book_Parking($Driverid,$plate,$car,$ParkingId,$p_owner,$status);
            $crud->ParkingSize($ParkingId,$current);
           header("Location: ../Driver_Dashboard/Parking_Reply.php?welcome");
         }
         elseif($size == 0)
         {
           header("Location: ../Driver_Dashboard/Parking_Reply.php?nospace");
         }       
        }
  }
  
   

}
?>