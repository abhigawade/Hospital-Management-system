<?php
 include 'source/contactussource.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contactus.css">

    <title>Contact us</title>
  
  </head>
  <body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark font-weight-bold py-3">
    <a class="navbar-brand" href="#">
    <img src="adminpanel/assets/img/logoo.png" width="30" height="30" alt="">
    </a>
       <a class="navbar-brand" href="#">HEALTHFIRST</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../public/homepage.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/aboutus.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/contactus.php">Contact us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../admin/patientlogin.php">Patient</a>
            <a class="dropdown-item" href="../admin/doctorlogin.php">Doctor</a>
            <a class="dropdown-item" href="../admin/adminlogin.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/ourdoctor.php">Our Doctors</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav><br>
  <section class="container">
    <!-- General Form Elements -->
    <form class="form" method="post" role="form" action="contactus.php">
              <h3 style="text-align:center">CONTACT US</h3><br>
              <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label"><b>First Name</b></label>
                    <div class="col-sm-8">
                        <input type="text" name="firstName" placeholder="First Name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label"><b>Last Name</b></label>
                    <div class="col-sm-8">
                        <input type="text" name="lastName" placeholder="Last Name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label"><b>Phone number</b> </label>
                    <div class="col-sm-8">
                        <input type="phonenumber" name="phoneNumber" placeholder="Phone number" maxlength="10" pattern="[6789][0-9]{9}" title="Please enter valid phone number" class="form-control" required>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label"><b>Email </label>
                    <div class="col-sm-8">
                        <input type="email"  placeholder="Email" class="form-control" name= "email" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="problem" class="col-sm-3 col-form-label"><b>Your Problem</b></label>
                  <div class="col-sm-8">
                    <textarea class="form-control" style="height: 100px" name="problem" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Contact Us</button>
                    <a href="contactus.php" class="btn btn-danger">Cancel</a>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
    </section>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>