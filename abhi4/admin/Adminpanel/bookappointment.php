<?php
 session_start();
 include 'headerpatient.php';
 include "../partials/_dbconnect.php";
?>

<section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">BOOK APPOINTMENT</h5>

              <!-- General Form Elements -->
              <form class="form-horizontal " method="post" action="../source/bookappointmentsource.php">
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
                  <label for="inputText" class="col-sm-2 col-form-label">Age</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="age" min="12" max="100" title="Your age should be 12 years or above" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="date" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                  <div class="col-sm-10">
                    <input type="time" class="form-control" name="time" min="09:00" max="18:00" title="Please enter time between 9 am to 6 pm" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Doctor's Name</label>
                  <div class="col-sm-10">
                    <select class="form-select" id="selecteddoctor" aria-label="Default select example" name="doctorName" required onchange="newfun(this)">
                      <option >select doctor</option>
                      <?php
                    $sql = "SELECT * FROM adddoctor";
                    $result = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result)>0)
                    {
                         while($row=mysqli_fetch_assoc($result))
                          {  
                            $fullName = $row['firstName'].' '.$row['lastName'];
        
                            echo '<option value="'.$fullName.'@'.$row['specialization'].'">'.$row['firstName'].' '.$row['lastName'].'</option>'; 
                          }
                    }
                   ?>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Department Name</label>
                  <div class="col-sm-10">
                    <!-- <p id="dname" class="form-control"> &nbsp;</p> -->
                    
                    <input type="text" class="form-control" id="dname" name="specialization">

                    <script>
                     function newfun(e){
                        console.log("s", e.value);
                        var department = document.getElementById('dname');                        
                        //console.log(document.getElementById('selecteddoctor').children);
                        var cut = e.value.indexOf('@');
                        var deptval = e.value.slice(cut+1);
                        // console.log(e.value.slice(cut+1));
                        department.value = deptval;
                      }
                      </script>

                    <!-- <select class="form-select" aria-label="Default select example" name="specialization" required>
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
                    </select> -->
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
                
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Book Appointment</button>
                    <a href="bookappointment.php" class="btn btn-danger">Cancel</a>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>


      </div>
    </section>


<?php
 include 'footerpatient.php';
?>