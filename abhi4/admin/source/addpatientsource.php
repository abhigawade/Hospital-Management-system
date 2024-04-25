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
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `register` (`firstName`, `lastName`, `DOB`, `bloodgroup`, `phoneNumber`, `email`, `password`, `cpassword`, `date`) VALUES ('$firstname', '$lastname', '$DOB', '$bloodgroup', '$phone', '$email', '$password', '$cpassword', current_timestamp())"; 
        $result = mysqli_query($conn, $sql);
        if($result){
            echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Patient Added Succesfully');
                    window.location.href='../adminpanel/addpatient.php?msg=SUCCESSFUL';
                   </script>");
            // header('location: ../adminpanel/addpatient.php?msg=PATIENTADDEDSUCCESSFULY');
        }
        else{
            echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Failed');
                    window.location.href='../adminpanel/addpatient.php?msg=FAILED';
                   </script>");
        }
    }
   
    

    }
?> 
