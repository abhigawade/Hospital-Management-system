<?php
 include 'headerdoctor.php';
 include "../partials/_dbconnect.php";
?>
<?php if (isset($_SESSION['email'])){ $D_Email = $_SESSION['email']; echo "<script>console.log('Debug Objects: " . $_SESSION['email'] . "' );</script>";   }?>
<section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update Doctor</h5>

              <?php
            //   if(isset($_GET['id'])){
            //    $id = $_GET['id'];
               $sql = "SELECT * FROM adddoctor where email='$D_Email' ";
               $result = mysqli_query($conn,$sql);
               if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){

              ?>
              <!-- General Form Elements -->
              <form class="form-horizontal " method="post" action="updatedoctorsource.php">
                <div class="row mb-3">
                <input type="hidden" name="edit_id"  value="<?php echo $row['id'];?>">
                  <label for="inputText" class="col-sm-2 col-form-label">First Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $row['firstName'];?>" name="edit_firstName" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Last Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $row['lastName'];?>" name="edit_lastName" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">DOB</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" value="<?php echo $row['DOB'];?>" name="edit_DOB" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Bloodgroup</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $row['bloodgroup'];?>" name="edit_bloodgroup" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Phone Number</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" value="<?php echo $row['phoneNumber'];?>" name="edit_phoneNumber" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" value="<?php echo $row['email'];?>" name="edit_email" required>
                  </div>
                </div>
                <!-- <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Specialization</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $row['specialization'];?>" name="edit_specialization" required>
                  </div>
                </div> -->

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Specialization</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="edit_specialization" required>
                      <option >select a department</option>
                      <?php
                    $sql = "SELECT * FROM department";
                    
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                         while($row=mysqli_fetch_assoc($result))
                          {  
                            echo '<option value="'.$row['departmentName'].'">'.$row['departmentName'].'</option>'; 
                          }
                    }
                   ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" name="update" value="update" class="btn btn-primary">Update Doctor</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
              <?php    
                }

               }
            //   } 
              ?> 
                 
              

            </div>
          </div>

        </div>


      </div>
    </section>

<?php
 if(isset($_POST['update'])){
  $id = $_POST['edit_id'];
  $firstname = $_POST['edit_firstName'];
  $lastname = $_POST['edit_lastName'];
  $DOB = $_POST['edit_DOB'];
  $bloodgroup = $_POST['edit_bloodgroup'];
  $phone = $_POST['edit_phoneNumber'];
  $email = $_POST['edit_email']; 
  $specialization = $_POST['edit_specialization'];

  $sql = " UPDATE adddoctor SET firstName='$firstname', lastName='$lastname', DOB='$DOB', bloodgroup='$bloodgroup', phoneNumber='$phone', email='$email', specialization='$specialization' WHERE id='$id' ";
  $result = mysqli_query($conn, $sql);

  if($result)
  {
    echo ("<script LANGUAGE='JavaScript'>
                  window.alert('Data updated Succesfully');
                  window.location.href='../adminpanel/doctoreditprofile.php?msg=SUCCESSFUL';
                </script>");
  }
  else
  {
    echo ("<script LANGUAGE='JavaScript'>
                  window.alert('Failed');
                  window.location.href='../adminpanel/doctoreditprofile.php?msg=FAILED';
                </script>");
  }


 }
?>    

<?php
 include 'footerdoctor.php';
?>