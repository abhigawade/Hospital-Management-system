<?php

 if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql = "Select * from adminlogin where email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        
        header("location: adminpanel/admindashboard.php");
    }


    else
    {
        echo "<script>alert('invalid credentials'); </script>";
    }    

}

?>