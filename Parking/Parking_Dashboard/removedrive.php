<?php
    include_once 'C:\xampp\htdocs\Car_Parking\Config\dbconfig.php';
             if(isset($_GET['id'])) {
              $id = $_GET['id'];
               $sql1 = 'SELECT * FROM datacenter WHERE id=:id';
               $stmt = $DB_con->prepare($sql1);
               $stmt->execute([':id' => $id]);
               while($row=$stmt->fetch(PDO::FETCH_ASSOC))
               {
               $plate =$row['Car_Plate'];
               $parkingid= $row['Parking'];
              if($crud->updateParking_space($plate,$parkingid))
              {
                $sql = 'SELECT * FROM parkings WHERE id=:id';
                $stmt = $DB_con->prepare($sql);
                $stmt->execute([':id' => $parkingid]);
                while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                $parkin = $row['P_Size'];
                $size= $parkin + 1;
                $crud->update_space($size,$id);
                header("Location: index.php");
                }
              } 
             }
            }
   ?>