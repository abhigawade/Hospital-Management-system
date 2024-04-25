<?php
 session_start();
 include "partials/_dbconnect.php";
?>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    //$showAlert = false;
    $firstname=$_POST['firstName'];
    $lastname=$_POST['lastName'];
    $DOB=$_POST['DOB'];
    $bloodgroup=$_POST['bloodgroup'];
    $phone=$_POST['phoneNumber'];
    $email=mysqli_escape_string($conn, $_POST['email']); 
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `register` (`firstName`, `lastName`, `DOB`, `bloodgroup`, `phoneNumber`, `email`, `password`, `cpassword`, `date`) VALUES ('$firstname', '$lastname', '$DOB', '$bloodgroup', '$phone', '$email', '$hash', '$cpassword', current_timestamp())"; 
        $result = mysqli_query($conn, $sql);
        if($result){
            echo ("<script LANGUAGE='JavaScript'>
                  window.alert('Succesfully Registration Done');
                  window.location.href='register.php?msg=REGISTRATIONDONE';
                </script>");
            //header("location: ../login-paitent.php?registrationSuccess");
        }
        else{
            // echo mysqli_error($conn);
            echo ("<script LANGUAGE='JavaScript'>
                  window.alert('Failed! Something went wrong');
                  window.location.href='register.php?msg=FAILED';
                </script>");
        }
    }
   
    

    }
?> 
