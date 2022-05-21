<?php

class crud
{
 private $db;
 
 function __construct($DB_con)
 {
  $this->db = $DB_con;
 }
 
 public function create($fname,$lname,$email,$pass)
 {
  try
  {
   $stmt = $this->db->prepare("INSERT INTO driver(Fname,Lname,Email,password) VALUES(:fname, :lname, :email, :pass)");
   $stmt->bindparam(":fname",$fname);
   $stmt->bindparam(":lname",$lname);
   $stmt->bindparam(":email",$email);
   $stmt->bindparam(":pass",$pass);
   $stmt->execute();
   return true;
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
  
 }
 public function Parking_owner($fname,$lname,$email,$pass)
 {
  try
  {
   $stmt = $this->db->prepare("INSERT INTO Parking_Owner(Fname,Lname,Email,password) VALUES(:fname, :lname, :email, :pass)");
   $stmt->bindparam(":fname",$fname);
   $stmt->bindparam(":lname",$lname);
   $stmt->bindparam(":email",$email);
   $stmt->bindparam(":pass",$pass);
   $stmt->execute();
   return true;
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
  
 }
 public function create_parking($pname,$plocation,$size,$owner)
 {
  try
  {
   $stmt = $this->db->prepare("INSERT INTO parkings(P_name,P_Location,P_Size,P_owner) VALUES(:pname, :plocation, :size,:owner)");
   $stmt->bindparam(":pname",$pname);
   $stmt->bindparam(":plocation",$plocation);
   $stmt->bindparam(":size",$size);
   $stmt->bindparam(":owner",$owner);
   $stmt->execute();
   return true;
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
  
 }
 public function Book_Parking($car_Id,$car,$plate,$parking_id,$p_owner,$status)
 {
  try
  {
   $stmt = $this->db->prepare("INSERT INTO datacenter(Driver,Car_Plate,Car,Parking,p_owner,status) VALUES(:car_Id, :car, :plate, :parking_id,:p_owner,:status)");
   $stmt->bindparam(":car_Id",$car_Id);
   $stmt->bindparam(":car",$car);
   $stmt->bindparam(":plate",$plate);
   $stmt->bindparam(":parking_id",$parking_id);
   $stmt->bindparam(":p_owner",$p_owner);
   $stmt->bindparam(":status",$status);
   $stmt->execute();
   return true;
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
  
 }
 public function Login_Driver($email,$password)
 {
  $stmt = $this->db->prepare("SELECT * FROM driver WHERE Email=:email AND password=:password");
  $stmt->execute(array(":email"=>$email,":password"=>$password));
  $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
  return $editRow;
 }
 public function Login_Parking_Owner($email,$password)
 {
  $stmt = $this->db->prepare("SELECT * FROM Parking_Owner WHERE Email=:email AND password=:password");
  $stmt->execute(array(":email"=>$email,":password"=>$password));
  $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
  return $editRow;
 }

 public function getID($id)
 {
  $stmt = $this->db->prepare("SELECT * FROM driver WHERE Email=:id");
  $stmt->execute(array(":id"=>$id));
  $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
  return $editRow;
 }
 
 public function updateDriver($id,$fname,$lname,$email,$pass)
 {
  try
  {
   $stmt=$this->db->prepare("UPDATE driver SET Fname=:fname, 
                                                 Lname=:lname, 
                Email=:email, 
                password=:pass
             WHERE id=:id ");
   $stmt->bindparam(":fname",$fname);
   $stmt->bindparam(":lname",$lname);
   $stmt->bindparam(":email",$email);
   $stmt->bindparam(":pass",$pass);
   $stmt->bindparam(":id",$id);
   $stmt->execute();
   
   return true; 
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
 }
 public function updateParkingOwner($id,$fname,$lname,$email,$pass)
 {
  try
  {
   $stmt=$this->db->prepare("UPDATE parking_owner SET Fname=:fname, 
                                                 Lname=:lname, 
                Email=:email, 
                password=:pass
             WHERE id=:id ");
   $stmt->bindparam(":fname",$fname);
   $stmt->bindparam(":lname",$lname);
   $stmt->bindparam(":email",$email);
   $stmt->bindparam(":pass",$pass);
   $stmt->bindparam(":id",$id);
   $stmt->execute();
   
   return true; 
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
 }
 public function updateParking($id,$P_name,$P_Location,$P_Size)
 {
  try
  {
   $stmt=$this->db->prepare("UPDATE parkings SET P_name=:P_name, 
                                                 P_Location=:P_Location, 
                                                 P_Size=:P_Size
                            WHERE id=:id ");
   $stmt->bindparam(":P_name",$P_name);
   $stmt->bindparam(":P_Location",$P_Location);
   $stmt->bindparam(":P_Size",$P_Size);
   $stmt->bindparam(":id",$id);
   $stmt->execute();
   
   return true; 
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
 }
 public function ParkingSize($id,$P_Size)
 {
  try
  {
   $stmt=$this->db->prepare("UPDATE parkings SET P_Size=:P_Size
                            WHERE id=:id ");
   $stmt->bindparam(":P_Size",$P_Size);
   $stmt->bindparam(":id",$id);
   $stmt->execute();
   
   return true; 
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
 }
 public function delete($id)
 {
  $stmt = $this->db->prepare("DELETE FROM parkings WHERE id=:id");
  $stmt->bindparam(":id",$id);
  $stmt->execute();
  return true;
 }

 public function updateParking_space($plate,$id)
 {
  try
  {
     $status=1;
   $stmt=$this->db->prepare("UPDATE datacenter SET status=:status
                            WHERE Car_Plate=:plate AND Parking=:id ");
   $stmt->bindparam(":status",$status);
   $stmt->bindparam(":plate",$plate);
   $stmt->bindparam(":id",$id);
   $stmt->execute();
   
   return true; 
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
 }
 public function update_space($P_Size,$id)
 {
  try
  {

   $stmt=$this->db->prepare("UPDATE parkings SET P_Size=:P_Size WHERE id=:id");
   $stmt->bindparam(":P_Size",$P_Size);
   $stmt->bindparam(":id",$id);
   $stmt->execute();
   
   return true; 
  }
  catch(PDOException $e)
  {
   echo $e->getMessage(); 
   return false;
  }
 }
 
}
