<?php
 session_start();
 include "../partials/_dbconnect.php";
?>
<?php
 $id = $_GET['id'];
 $sql="DELETE from prescription  where id='$id'";
 $result = mysqli_query($conn,$sql);

 if($result)
 {
  echo ("<script LANGUAGE='JavaScript'>
            window.alert('Prescription Deleted Succesfully');
            window.location.href='../adminpanel/manageprescription.php?msg=SUCCESSFUL';
         </script>");
  //  header('location: ../adminpanel/manageprescription.php?msg=PRESCRIPTIONDELETEDSUCESSFULLY');
   
 }
 else
 {
  echo ("<script LANGUAGE='JavaScript'>
          window.alert('Failed');
          window.location.href='../adminpanel/manageprescription.php?msg=FAILED';
         </script>");
   header('location: ../adminpanel/manageprescription.php?FAILED');
 }
?>