<?php require 'config/header.php'; ?>
<?php 
                 $dsn = 'mysql:host=localhost;dbname=parking_system';
                 $username = 'root';
                 $password = '';
                 $options = [];
                 try {
                 $connection = new PDO($dsn, $username, $password, $options);
                 } catch(PDOException $e) {
                 
                 } 
                 $user= $_SESSION['parking_owner'];
                 $sql1 = 'SELECT * FROM parking_owner WHERE Email=:user';
                              $stmt = $connection->prepare($sql1);
                              $stmt->execute([':user' => $user]);
                              while($row=$stmt->fetch(PDO::FETCH_ASSOC))                            
                                     $id = $row['id'];
                                     $status = 0;
                 $sql = 'SELECT * FROM driver INNER JOIN datacenter ON driver.id=datacenter.Driver WHERE datacenter.p_owner=:id AND datacenter.status=:status';
                 $stmt = $connection->prepare($sql);
                 $stmt->execute([':id' => $id,':status' => $status]);
               
                 ?>
           

  <!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">
        <!--Section: Sales Performance KPIs-->
        <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Drivers Apply</strong>
            </h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Names</th>
                    <th scope="col">Email</th>
                    <th scope="col">Car Name</th>
                    <th scope="col">Car Plate</th>  
                    <th scope="col">Action</th>  
                  </tr>
                </thead>
                <?php
                 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                     {
                    
                        ?> 
                <tbody>
                  <tr>
                  <th scope="row"><?php echo $row['id']; ?></th>
                     
                  <td><?php echo $row['Fname']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Car']; ?></td>
                    <td><?php echo $row['Car_Plate']; ?></td>
                    <td><a onclick="return confirm('Are you sure you want to Remove this?')" href="removedrive.php?id=<?php echo $row['id']; ?>">Remove</a></td>
                  </tr>
                  
                </tbody>
                <?php } ?>
              </table>
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