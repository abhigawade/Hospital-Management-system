<?php
 session_start();
 include "../partials/_dbconnect.php";
?>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname=$_POST['firstName'];
    $lastname=$_POST['lastName'];
    $DOB=$_POST['DOB'];
    $bloodgroup=$_POST['bloodgroup'];
    $phone=$_POST['phoneNumber'];
    $email=mysqli_escape_string($conn, $_POST['email']); 
    $specialization=$_POST['specialization'];
    $password=$_POST['password'];

    
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `adddoctor` (`firstName`, `lastName`, `DOB`, `bloodgroup`, `phoneNumber`, `email`, `specialization` , `password`) VALUES ('$firstname', '$lastname', '$DOB', '$bloodgroup', '$phone', '$email', '$specialization' , '$hash')"; 
        $result = mysqli_query($conn, $sql);

        if($result){
            echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Doctor Added Succesfully');
                    window.location.href='../adminpanel/adddoctor.php?msg=SUCCESSFUL';
                   </script>");
            // header('location: ../adminpanel/adddoctor.php?msg=DOCTORADDEDSUCCESSFULY');
        }
        else{
            echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Failed');
                    window.location.href='../adminpanel/adddoctor.php?msg=FAILED';
                   </script>");
            // header('location: ../adminpanel/adddoctor.php?msg=FAILED');
        }
    
        
   
    

    }
?> 
