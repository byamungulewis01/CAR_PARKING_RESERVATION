<?php require 'config/header.php'; ?>


  <!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">
       <!--Section: Statistics with subtitles-->
       <section>
        <div class="row">
          <div class="col-xl-12 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
              <?php
if(isset($_GET['welcome']))
{
 ?>
   
 <div class="alert alert-info">
    <strong>HeY!</strong> Welcome To our Parking 
 </div>
 
    <?php
}
else if(isset($_GET['nospace']))
{
 ?>
   
 <div class="alert alert-danger">
    <strong>SORRY!</strong> We Don't Have Enought Space In Parking!
 
 </div>
    <?php
}
?>
<?php
if(isset($_GET['exist']))
{
 ?>
  <div class="alert alert-danger">
    <strong>SORRY!</strong> Your Still in Parking
 
 </div>
    <?php
}
?>
                <div class="d-flex justify-content-between p-md-1">
               
               
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