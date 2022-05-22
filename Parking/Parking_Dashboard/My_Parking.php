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
                 $sql = 'SELECT * FROM parkings where P_owner=:id';
                 $stmt = $connection->prepare($sql);
                 $stmt->execute([':id' => $id]);
                 ?>
           

  <!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">
        <!--Section: Sales Performance KPIs-->
        <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>MY PARKINGS</strong>
              <?php
if(isset($_GET['inserted']))
{
 ?>
   
 <div class="alert alert-info">
    <strong>WOW!</strong> Parking was Modified successfully
 </div>
 
    <?php
}
else if(isset($_GET['failure']))
{
 ?>
   
 <div class="alert alert-warning">
    <strong>SORRY!</strong> ERROR while Modifying Parking !
 
 </div>
    <?php
}
?>
<?php
if(isset($_GET['deleted']))
{
 ?>
   
 <div class="alert alert-danger">
    Parking Deleted successfully!!
 
 </div>
    <?php
}
?>
            </h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Location</th>
                    <th scope="col">Available Space</th>
                    <th scope="col" rowspan="2">Action</th>  
                  </tr>
                </thead>
                <?php
                 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                     {
                    
                        ?> 
                <tbody>
                 <tr>
                  <th scope="row"><?php echo $row['id']; ?></th>
                     
                  <td><?php echo $row['P_name']; ?></td>
                    <td><?php echo $row['P_Location']; ?></td>
                    <td><?php echo $row['P_Size']; ?></td>
                    <td><a href="Edit_My_Parking.php?id=<?php echo $row['id']; ?>">Edit</a> </td>
                    <td><a onclick="return confirm('Are you sure you want to delete this?')" href="../config/deleteParking.php?id=<?php echo $row['id']; ?>">Remove</a></td>
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