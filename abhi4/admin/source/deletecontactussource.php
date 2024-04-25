<?php
 session_start();
 include "../partials/_dbconnect.php";
?>
<?php
 $id = $_GET['id'];
 $sql="DELETE from contactus  where id='$id'";
 $result = mysqli_query($conn,$sql);

 if($result)
 {
  echo ("<script LANGUAGE='JavaScript'>
          window.alert('Record Deleted Succesfully');
          window.location.href='../adminpanel/deletecontactus.php?msg=SUCCESSFUL';
         </script>");
  //  header('location: ../adminpanel/deletecontactus.php?msg=CONTACTDELETEDSUCESSFULLY');
   
 }
 else
 {
  echo ("<script LANGUAGE='JavaScript'>
          window.alert('Failed');
          window.location.href='../adminpanel/deletecontactus.php?msg=FAILED';
         </script>");
  //  header('location: ../adminpanel/deletecontactus.php?CONTACTNOTDELETED');
 }
?>