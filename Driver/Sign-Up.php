<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>CAR PARKING RESERVATION</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
      <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
              
                      <h3 class="mb-5">Create Account</h3>
                      <?php
if(isset($_GET['inserted']))
{
 ?>
   
 <div class="alert alert-info">
    <strong>WOW!</strong> Record was inserted successfully <a href="index.php">Login</a>!
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

                      <form method="post" action="config/sign_up.php">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">
                          <div class="col-md-6 mb-4">
                            <div class="form-outline">
                              <input name="fname" type="text" id="form3Example1" class="form-control" required/>
                              <label class="form-label" for="form3Example1">First name</label>
                            </div>
                          </div>
                          <div class="col-md-6 mb-4">
                            <div class="form-outline">
                              <input name="lname" type="text" id="form3Example2" class="form-control" required/>
                              <label class="form-label" for="form3Example2">Last name</label>
                            </div>
                          </div>
                        </div>
          
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                          <input name="email" type="email" id="form3Example3" class="form-control" required/>
                          <label class="form-label" for="form3Example3">Email address</label>
                        </div>
          
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                          <input name="password" type="password" id="form3Example4" class="form-control" required/>
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
               
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

  <!--Footer-->
  <footer class="bg-light text-lg-start">
  

    <hr class="m-0" />


    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">Car Parking Reservation</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>