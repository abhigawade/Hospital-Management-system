<?php
 session_start();
 include "../partials/_dbconnect.php";
?>
<?php
 $id = $_GET['id'];
 $sql="DELETE from adddoctor  where id='$id'";
 $result = mysqli_query($conn,$sql);

 if($result)
 {
  echo ("<script LANGUAGE='JavaScript'>
           window.alert('Doctor Deleted Succesfully');
           window.location.href='../adminpanel/deletedoctor.php?msg=SUCCESSFUL';
         </script>");
  //  header('location: ../adminpanel/deletedoctor.php?msg=DOCTORDELETEDSUCESSFULLY');
   
 }
 else
 {
  echo ("<script LANGUAGE='JavaScript'>
          window.alert('Patient Deleted Succesfully');
          window.location.href='../adminpanel/deletedoctor.php?msg=SUCCESSFUL';
         </script>");
  //  header('location: ../adminpanel/deletedoctor.php?DOCTORNOTDELETED');
 }
?>