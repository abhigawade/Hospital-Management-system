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
 $doctorname = $_POST['doctorName'];
 $time = $_POST['time'];
 $date = $_POST['date'];

 $sql = "SELECT * FROM `appointments` WHERE date = '$date' AND time = '$time' AND doctorname = '$doctorname'";
 $result = mysqli_query($conn, $sql);

 $numrows = mysqli_num_rows($result);

 if($numrows>0){
  echo ("<script LANGUAGE='JavaScript'>
          window.alert('Appointment Already Booked Choose Diffrent Time');
          window.location.href='../adminpanel/bookappointment.php';
        </script>");
 }
 else{
   if($_SERVER["REQUEST_METHOD"]=="POST"){
      if(isset($_SESSION['email'])){
  
          $sql = "SELECT * FROM register where email = '$email'";
          $result = mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)>0){
              while($row=mysqli_fetch_assoc($result))
              { 
                  $patientid = $row['id'];
               }
          }
         
        }
  
        $firstname=$_POST['firstName'];
        $lastname=$_POST['lastName'];
        $age=$_POST['age'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        $doctorname=$_POST['doctorName'];
        $delstr = strpos($doctorname, "@");
        $doctorname = substr($doctorname,0,  $delstr);
        $specialization=$_POST['specialization'];
        $phone=$_POST['phoneNumber'];
        $email=mysqli_escape_string($conn, $_POST['email']); 
        echo var_dump($doctorname);
        
        echo "<script>console.log('patientid Objects: " . $doctorname . "' );</script>";
  
        $sql = "INSERT INTO `appointments` (`firstName`, `lastName`,`age`, `date`, `time`, `doctorName`, `specialization`, `phoneNumber`, `email`, `patientid`) VALUES ('$firstname', '$lastname', '$age', '$date', '$time', '$doctorname', '$specialization', '$phone', '$email', '$patientid')";
        $result = mysqli_query($conn,$sql);
        if($result){
          echo ("<script LANGUAGE='JavaScript'>
                  window.alert('Appointment Book Successfully');
                  window.location.href='../adminpanel/bookappointment.php?msg=SUCCESSFUL';
                </script>");
         //   header("location: ../adminpanel/patientdashboard.php?appointmentBook");
          
        }
        else{
          echo ("<script LANGUAGE='JavaScript'>
                  window.alert('Failed');
                  window.location.href='../adminpanel/bookappointment.php?msg=FAILED';
                </script>");
        }
  
   }
 }

 ?>