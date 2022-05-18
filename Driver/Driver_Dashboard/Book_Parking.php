<?php require 'config/header.php'; ?>


  <!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">
       <!--Section: Statistics with subtitles-->
       <section>
        <div class="row">
          <div class="col-xl-6 col-md-12 mb-4">
 
<?php
              
                 include_once 'conn.php';
                 $ParkingId = $_GET['id'];
                 $sql = 'SELECT * FROM parkings WHERE id=:id';
                 $stmt = $connection->prepare($sql);
                 $stmt->execute([':id' => $ParkingId]);
               
                 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                     {                    
                        $pname = $row['P_name'];
                        $pAddress = $row['P_Location'];
                        $p_owner = $row['P_owner'];
                        ?>
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div>
                <h4 class="mb-3">Parking Information </h4>
       
                      <p class="mb-3">Parking Name :  <strong><?php echo $pname; ?></strong></p>
                      <hr class="my-1">
                      <p class="mb-3">Lacation :  <strong><?php echo $pAddress; ?></strong></p>
                  
                    </div>
               
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="col-xl-4 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
              <h3 class="mb-3">Get Your Place</h3>
              <?php  
                              
                               $user= $_SESSION['driver'];
                               $sql = 'SELECT * FROM driver WHERE Email=:user';
                               $stmt = $connection->prepare($sql);
                               $stmt->execute([':user' => $user]);
                             
                               while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                   {
                                      $driverid = $row['id'];
                                
              ?>
                      <form method="post" action="../config/BookParking.php">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">
                          <div class="col-md-12 mb-2">
                            <div class="form-outline">
                            
                            <input type="hidden" name="p_owner" value="<?php echo $p_owner; ?>">
                              <input type="hidden" name="driverid" value="<?php echo $driverid; ?>">
                              <input type="hidden" name="parkingid" value="<?php echo $ParkingId; ?>">
                              <input name="car" type="text" id="form3Example1" class="form-control" required/>
                              <label class="form-label" for="form3Example1">Car Name</label>
                            </div>
                          </div>
                          <div class="col-md-12 mb-4">
                            <div class="form-outline">
                              <input name="plate" type="text" id="form3Example1" class="form-control" required/>
                              <label class="form-label" for="form3Example1">Car Plate</label>
                            </div>
                          </div>
                        </div>
          
                    
          
                        <!-- Submit button -->
                        <button name="submit" type="submit" class="btn btn-primary mb-2">
                          Get Place
                        </button>
          
                      </form>
             <?php 
              }
             ?>
              </div>
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