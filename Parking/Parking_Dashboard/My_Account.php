<?php require 'config/header.php'; ?>


  <!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">
       <!--Section: Statistics with subtitles-->
       <section>
        <div class="row">
          <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                 <?php                
                include_once 'conn.php';
                 $user= $_SESSION['parking_owner'];
                
                 $sql = 'SELECT * FROM parking_owner WHERE Email=:user';
                 $stmt = $connection->prepare($sql);
                 $stmt->execute([':user' => $user]);
               
                 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                     {
                        $id = $row['id']; 
                        $fname = $row['Fname']; 
                        $lname = $row['Lname']; 
                        $email = $row['Email']; 
                        $pass = $row['password']; 
                        ?>
                       
                    <div>
                      <h4 class="mb-3">My Account Information </h4>
                      <?php
if(isset($_GET['inserted']))
{
 ?>
   
 <div class="alert alert-info">
    <strong>WOW!</strong> Record was Modified successfully
 </div>
 
    <?php
}
else if(isset($_GET['failure']))
{
 ?>
   
 <div class="alert alert-warning">
    <strong>SORRY!</strong> ERROR while Modifying record !
 
 </div>
    <?php
}
?>
                      <p class="mb-3">First Name :  <strong><?php echo $fname; ?></strong></p>
                      <hr class="my-1">
                      <p class="mb-3">Last Name :  <strong><?php echo $lname; ?></strong></p>
                      <hr class="my-1">
                      <p class="mb-3">Email :  <strong><?php echo $email; ?></strong></p>
                      <hr class="my-1">
                      <p class="mb-3">Password  : <strong><?php echo $pass; ?></strong></p>
                      
                    </div>
                    
                  </div>
                  <div class="align-self-center">
                    <form method="post">
              <input name="submit" type="submit"class="btn btn-light" value="update"></form>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php  
 if (isset($_POST['submit'])) {
   echo '<div class="col-xl-6 col-md-12 mb-4">
   <div class="card">
     <div class="card-body">
     <h3 class="mb-5">Manage Your Account</h3>
             <form method="post" action="../config/updateParkingOwner.php">
               <!-- 2 column grid layout with text inputs for the first and last names -->
               <div class="row">
                 <div class="col-md-6 mb-4">
                   <div class="form-outline">
                   <input name="id" value="'.$id.'" type="hidden" />
                     <input name="fname" value="'.$fname.'" type="text" id="form3Example1" class="form-control" />
                     <label class="form-label" for="form3Example1">First name</label>
                   </div>
                 </div>
                 <div class="col-md-6 mb-4">
                   <div class="form-outline">
                     <input  name="lname" value="'.$lname.'" type="text" id="form3Example2" class="form-control" />
                     <label class="form-label" for="form3Example2">Last name</label>
                   </div>
                 </div>
               </div>
 
               <!-- Email input -->
               <div class="form-outline mb-4">
                 <input  name="email" value="'.$email.'" type="email" id="form3Example3" class="form-control" />
                 <label class="form-label" for="form3Example3">Email address</label>
               </div>
 
               <!-- Password input -->
               <div class="form-outline mb-4">
                 <input name="password" value="'.$pass.'" type="text" id="form3Example4" class="form-control" />
                 <label class="form-label" for="form3Example4">Password</label>
               </div>
 
 
               <!-- Submit button -->
               <button name="submit" type="submit" class="btn btn-primary btn-block mb-4">
                 Sign up
               </button>
 
             </form>
             <hr class="my-1">
     </div>
   </div>
 </div>';
 }

 ?>
        </div>
       
        <?php }?>
      </section>
     
      <!--Section: Statistics with subtitles-->
    </div>
  </main>
  <!--Main layout-->
  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="js/admin.js"></script>

</body>

</html>