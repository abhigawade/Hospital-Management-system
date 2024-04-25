<?php
 include 'headeradmin.php';
 include "../partials/_dbconnect.php";
?>

<section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">ADD DOCTOR</h5>

              <!-- General Form Elements -->
              <form class="form-horizontal " method="post" action="../source/adddoctorsource.php">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">First Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="firstName" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Last Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="lastName" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">DOB</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="DOB" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Bloodgroup</label>
                  <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" name="bloodgroup" required> -->
                    <select class="form-control" type="text" name="bloodgroup" required>
                      <option>Select Bloodgroup</option>
                      <option>A+</option>
                      <option>A-</option>
                      <option>B+</option>
                      <option>B-</option>
                      <option>O+</option>
                      <option>O-</option>
                      <option>AB+</option>
                      <option>Ab-</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Phone Number</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="phoneNumber" maxlength="10" pattern="[6789][0-9]{9}" title="Please enter valid phone number" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" required>
                  </div>
                </div>
                <!-- <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Specialization</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="specialization" required>
                  </div>
                </div> -->
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Department Name</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="specialization" required>
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
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add Doctor</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>


      </div>
    </section>


<?php
 include 'footeradmin.php';
?>