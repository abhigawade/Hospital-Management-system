<?php
 session_start();
 include "../partials/_dbconnect.php";
?>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $departmentname=$_POST['departmentName'];
    
    
        $sql = "INSERT INTO `department` ( `departmentName`) VALUES ('$departmentname')"; 
        $result = mysqli_query($conn, $sql);
        if($result){
               echo '<script> alert("Department added successfully") </script>';
            // header('location: ../adminpanel/adddepartment.php?msg=DEPARTMENTADDEDSUCCESSFULY');
        }
        else{
              echo '<script> alert("oops! something went wrong") </script>'; 
            // header('location: ../adminpanel/adddepartment.php?msg=FAILED');
        }
   
    

    }
?> 
