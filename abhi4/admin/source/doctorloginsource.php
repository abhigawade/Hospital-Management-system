<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql = "Select * from adddoctor where email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row = mysqli_fetch_assoc($result)){
            if(password_verify($password, $row['password'])){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header("location: adminpanel/doctordashboard.php");

            }
            else
            {
                echo "<script>alert('invalid credentials'); </script>";
            }
        }
        
    }


    else
    {
        echo "<script>alert('invalid credentials'); </script>";
    }    

}
?>
