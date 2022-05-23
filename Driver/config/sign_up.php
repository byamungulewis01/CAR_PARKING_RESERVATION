<?php
include_once 'C:\xampp\htdocs\Car_Parking\Config\dbconfig.php';
if(isset($_POST['submit']))
{
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $pass = $_POST['password'];
 $query = "SELECT * FROM driver WHERE Email=:email";
 $stmt1 = $DB_con->prepare($query);
 $stmt1->execute([':email' => $email]);
 $countRow = $stmt1->rowCount();
  if ($countRow > 0) {
    header("Location: ../Sign-Up.php?exist");
  } 
  
  
  else {
    if($crud->create($fname,$lname,$email,$pass))
    {
     header("Location: ../Sign-Up.php?inserted");
    }
    else
    {
     header("Location: ../Sign-Up.php?failure");
    }
  }
 
}
?>