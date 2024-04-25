<?php
 $title = "PATIENT REGISTER";
 include "source/registersource.php";
 include 'navbar.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">

    <title>Register</title>
    
  </head>
  <body>

    <!-- <?php
    if($showAlert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created you can login now
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    }
    ?>  -->
    <div class="container">
        <!-- <div class="title">Register Yourself</div> -->
        <form class="form-horizontal " action="register.php" method="post" role="form">
             <h3 style="text-align:center">REGISTER YOURSELF</h3><br>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label"><b>First Name</b></label>
                    <div class="col-sm-9">
                        <input type="text" name="firstName" placeholder="First Name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label"><b>Last Name</b></label>
                    <div class="col-sm-9">
                        <input type="text" name="lastName" placeholder="Last Name" class="form-control" required>
                    </div>
                </div>
				<div class="form-group">
                    <label for="DOB" class="col-sm-3 control-label"><b>Date of Birth</b></label>
                    <div class="col-sm-9">
                        <input type="date" name="DOB" class="form-control" required>
                    </div>
                </div>
				<div class="form-group">
                        <label for="bloodgroup" class="col-sm-3 control-label"><b>Blood group</b></label>
                    <div class="col-sm-9">
                        <!-- <input type="text" name="bloodgroup" placeholder="Blood group" class="form-control" required> -->
                        <select class="form-control" type="text" name="bloodgroup" required>
                      <option>Select your Bloodgroup</option>
                      <option>A+</option>
                      <option>A-</option>
                      <option>B+</option>
                      <option>B-</option>
                      <option>O+</option>
                      <option>O-</option>
                      <option>AB+</option>
                      <option>Ab-</option>
                    </select>

                    </div>
                </div>
				<div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label"><b>Phone number</b> </label>
                    <div class="col-sm-9">
                        <input type="phone" name="phoneNumber" maxlength="10" placeholder="Phone number" pattern="[6789][0-9]{9}" title="Phone number starts with 6-9 and remaing 9 digit with 0-9" class="form-control" required>
                        <!-- <span class="help-block">Your phone number won't be disclosed anywhere </span> -->
                    </div>
                </div> 
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label"><b>Email </b></label>
                    <div class="col-sm-9">
                        <input type="email"  placeholder="Email" class="form-control" name= "email" required>
                    </div>
                </div>
				
				
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label"><b>Password</b></label>
                    <div class="col-sm-9">
                        <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" class="form-control" required>
                        <!-- <span class="help-block">Password must contain atleast 8 character, one big alphabet and number eg: Passs123 </span> -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-4 control-label"><b>Confirm Password</b></label>
                    <div class="col-sm-9">
                        <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control" required>
                    </div>
                </div>
                
                
                <button type="submit" class="btn btn-primary btn-block">Register</button><br>
				<div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Already Registered? <a href="patientlogin.php" class="text-primary ml-2">Login</a></p>
                    </div>
                
    
        </form>

    </div>
    
    

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