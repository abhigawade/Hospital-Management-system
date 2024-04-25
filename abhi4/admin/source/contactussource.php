<?php
 session_start();
 include "partials/_dbconnect.php";
?>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname=$_POST['firstName'];
    $lastname=$_POST['lastName'];
    $phone=$_POST['phoneNumber'];
    $email=mysqli_escape_string($conn, $_POST['email']); 
    $problem=$_POST['problem'];

    $sql = "INSERT INTO `contactus` ( `firstName`, `lastName`, `phoneNumber`, `email`, `problem`) VALUES ('$firstname', '$lastname', '$phone', '$email', '$problem')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo ("<script LANGUAGE='JavaScript'>
                  window.alert('Succesfully Contact Recorded');
                  window.location.href='contactus.php?msg=YOURCONTACTRECORDED';
                </script>");  
        // header('location: contactus.php?msg=YOURCONTACTRECORDED');
    }
    else{
        echo ("<script LANGUAGE='JavaScript'>
                  window.alert('Failed! Something went wrong');
                  window.location.href='contactus.php?msg=FAILED';
                </script>");
        // header('location: contactus.php?msg=FAILED');
    }
}

?>