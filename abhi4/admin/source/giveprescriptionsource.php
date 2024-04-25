<?php
 session_start();
 include "../partials/_dbconnect.php";
?>
<?php
 if (isset($_SESSION['email']))
 {
      $email = $_SESSION['email']; 
 }
 ?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    // echo var_dump($_POST);

    $prescri = $_POST['prescri'];
    $appointmentid = intval($_POST['appointmentid']);
    // var_dump($appointmentid);




    $sql = "SELECT * FROM `appointments` WHERE `id` = $appointmentid";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $patientid = $row['patientid'];

    // echo $patientid;
    
        $sql = "INSERT INTO `prescription` ( `prescri`, `appointmentid`, `patientid`) VALUES ('$prescri', $appointmentid, $patientid)"; 
        $result = mysqli_query($conn, $sql);
        if($result){
            echo ("<script LANGUAGE='JavaScript'>
                      window.alert('Prescription Recorded Successfully');
                      window.location.href='../adminpanel/giveprescription.php?msg=SUCCESSFUL';
                   </script>");
            // header('location: ../adminpanel/giveprescriptionform.php?msg=PRESCRIPTIONADDEDSUCCESSFULY');
        }
        else{
            echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Failed');
                    window.location.href='../adminpanel/giveprescription.php?msg=FAILED';
                   </script>"); 
            // header('location: ../adminpanel/giveprescriptionform.php?msg=FAILED');
        }
   
    

    }
?> 
