<?php
 session_start();
 include "../partials/_dbconnect.php";
?>
<?php
 $id = $_GET['id'];
 $sql="DELETE from register  where id='$id'";
 $result = mysqli_query($conn,$sql);

 if($result)
 { 
  echo ("<script LANGUAGE='JavaScript'>
           window.alert('Patient Deleted Succesfully');
           window.location.href='../adminpanel/deletepatient.php?msg=SUCCESSFUL';
         </script>");
  //  header('location: ../adminpanel/deletepatient.php?msg=PATIENTDELETEDSUCESSFULLY');
   
 }
 else
 {
 echo ("<script LANGUAGE='JavaScript'>
           window.alert('Patient Deleted Succesfully');
           window.location.href='../adminpanel/deletepatient.php?msg=SUCCESSFUL';
         </script>");
  //  header('location: ../adminpanel/deletepatient.php?PATIENTNOTDELETED');
 }
?>