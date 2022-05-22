<?php require 'config/header.php'; ?>
<?php  
                              include_once 'conn.php';
                              $user= $_SESSION['parking_owner'];
                              $sql = 'SELECT * FROM parking_owner WHERE Email=:user';
                              $stmt = $connection->prepare($sql);
                              $stmt->execute([':user' => $user]);
                            
                              while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                              
                                     $id = $row['id'];
                               
             ?>

  <!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">
       <!--Section: Statistics with subtitles-->
       <section>
        <div class="row">
          <div class="col-xl-6 col-md-12 mb-4">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
            <h3 class="mb-5">Parking</h3>
                      <?php
if(isset($_GET['inserted']))
{
 ?>
   
 <div class="alert alert-info">
    <strong>WOW!</strong>Parking was Added successfully
 </div>
 
    <?php
}
else if(isset($_GET['failure']))
{
 ?>
   
 <div class="alert alert-warning">
    <strong>SORRY!</strong> ERROR while inserting record !
 
 </div>
    <?php
}
?>

                      <form method="post" action="../config/parking_add.php">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">
                          <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <input name="owner" type="hidden" value="<?php echo $id; ?>" required/>
                              <input name="p_name" type="text" id="form3Example1" class="form-control" />
                              <label class="form-label" for="form3Example1">Parking Name</label>
                            </div>
                          </div>
                          <div class="col-md-6 mb-4">
                            <div class="form-outline">
                              <input name="p_location" type="text" id="form3Example2" class="form-control" required/>
                              <label class="form-label" for="form3Example2">Locate</label>
                            </div>
                          </div>
                        </div>
          
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                          <input name="space" type="Number" id="form3Example3" class="form-control" required/>
                          <label class="form-label" for="form3Example3">Space</label>
                        </div>
          

          
                        <!-- Submit button -->
                        <button name="submit" type="submit" class="btn btn-primary btn-block mb-4">
                          Add Parking
                        </button>
          
                      </form>
                      <hr class="my-1">
          
            </div>
          </div>
          </div>
         
       
     
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