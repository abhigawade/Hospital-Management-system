<?php
 session_start();
 include "../partials/_dbconnect.php";
?>
<?php
 $id = $_GET['id'];
 $sql="DELETE from appointments  where id='$id'";
 $result = mysqli_query($conn,$sql);

 if($result)
 {
  echo ("<script LANGUAGE='JavaScript'>
           window.alert('Appointment Deleted Succesfully');
           window.location.href='../adminpanel/deleteappointmentdoctor.php?msg=SUCCESSFUL';
         </script>");
  //  header('location: ../adminpanel/deleteappointmentdoctor.php?msg=APPOINTMENTDELETEDSUCESSFULLY');
   
 }
 else
 {
  echo ("<script LANGUAGE='JavaScript'>
          window.alert('Failed');
          window.location.href='../adminpanel/deleteappointmentdoctor.php?msg=FAILED';
         </script>");
  //  header('location: ../adminpanel/deleteappointmentdoctor.php?APPOINTMENTNOTDELETED');
 }
?>