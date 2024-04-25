<?php
 session_start();
 include 'headerpatient.php';
 include "../partials/_dbconnect.php";
?>
<?php if (isset($_SESSION['email'])){ $P_Email = $_SESSION['email']; echo "<script>console.log('Debug Objects: " . $_SESSION['email'] . "' );</script>";   }?> 
<section class="section profile">
      <div class="row">
        <div class="col-xl-1">

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <?php
              //  $id = $_GET['id'];
               $sql = "SELECT * FROM register where email='$P_Email' ";
               $result = mysqli_query($conn,$sql);
               if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){

              ?>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  
                  <h5 class="card-title">PROFILE DETAILS</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">FIRST NAME</div>
                    <div class="col-lg-9 col-md-8"><b><?php echo $row['firstName'];?></b></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">LAST NAME</div>
                    <div class="col-lg-9 col-md-8"><b><?php echo $row['lastName'];?></b></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">DOB</div>
                    <div class="col-lg-9 col-md-8"><b><?php echo $row['DOB'];?></b></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">BLOODGROUP</div>
                    <div class="col-lg-9 col-md-8"><b><?php echo $row['bloodgroup'];?></b></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">PHONENUMBER</div>
                    <div class="col-lg-9 col-md-8"><b><?php echo $row['phoneNumber'];?></b></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">EMAIL</div>
                    <div class="col-lg-9 col-md-8"><b><?php echo $row['email'];?></b></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Date of Register</div>
                    <div class="col-lg-9 col-md-8"><b><?php echo $row['date'];?></b></div>
                  </div>

                </div>

                

            
              </div><!-- End Bordered Tabs -->

              <?php    
                }

               }
              ?>

            </div>
          </div>

        </div>
      </div>
    </section>

<?php
 include 'footerpatient.php';
?>