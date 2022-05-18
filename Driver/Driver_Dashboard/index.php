
<?php require 'config/header.php'; ?>

  <!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">
  
      <!--Section: Minimal statistics cards-->
      <section>
      <div class="row">
      <?php 
                 $dsn = 'mysql:host=localhost;dbname=parking_system';
                 $username = 'root';
                 $password = '';
                 $options = [];
                 try {
                 $connection = new PDO($dsn, $username, $password, $options);
                 } catch(PDOException $e) {
                 
                 } 
                 $sql = 'SELECT * FROM parkings';
                 $stmt = $connection->prepare($sql);
                 $stmt->execute();
                 ?>
             <?php
                 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                     {
                      $id = $row['id']; 
                        $p_name = $row['P_name']; 
                        $P_lacation = $row['P_Location']; 
                        ?>  

         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="Book_Parking.php?id=<?php echo $id; ?>">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               <?php echo $p_name; ?>
                                             </div>
                                            </a>
                                            <div class="h6 mb-0">  <?php echo $P_lacation;  ?></div>
                                           
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bus fa-2x text-gray-300"></i>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
          <?php } ?>
                     </div>
      </section>
      <!--Section: Minimal statistics cards-->

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