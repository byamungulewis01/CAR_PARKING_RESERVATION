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
                 $id= $_GET['id'];
                
                 $sql = 'SELECT * FROM parkings WHERE id=:id';
                 $stmt = $connection->prepare($sql);
                 $stmt->execute([':id' => $id]);
               
                 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                     {
                        $id = $row['id']; 
                        $P_name	 = $row['P_name']; 
                        $P_Location = $row['P_Location']; 
                        $P_Size = $row['P_Size']; 
                      
                        ?>
                       
                    <div>
                      <h4 class="mb-3">My Account Information </h4>

                      <p class="mb-3">PArking Name :  <strong><?php echo $P_name; ?></strong></p>
                      <hr class="my-1">
                      <p class="mb-3">Lacation :  <strong><?php echo $P_Location; ?></strong></p>
                      <hr class="my-1">
                      <p class="mb-3">Available Space :  <strong><?php echo $P_Size; ?></strong></p>
                      <hr class="my-1">
                    
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
     <h3 class="mb-5">Manage Your Parking</h3>
             <form method="post" action="../config/updateParking.php">
               <!-- 2 column grid layout with text inputs for the first and last names -->
               <div class="row">
                 <div class="col-md-6 mb-4">
                   <div class="form-outline">
                   <input name="id" value="'.$id.'" type="hidden" />
                     <input name="P_name" value="'.$P_name.'" type="text"  class="form-control" />
                    
                   </div>
                 </div>
                 <div class="col-md-6 mb-4">
                   <div class="form-outline">
                     <input  name="P_Location" value="'.$P_Location.'" type="text" class="form-control" />
                
                   </div>
                 </div>
               </div>
 
               <!-- Email input -->
               <div class="form-outline mb-4">
                 <input  name="P_Size" value="'.$P_Size.'" type="Numeric" class="form-control" />
              
               </div>
 
             
 
               <!-- Submit button -->
               <button name="submit" type="submit" class="btn btn-primary btn-block mb-4">
                 Update
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