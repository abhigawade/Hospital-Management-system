<?php
 session_start();
 include 'headerdoctor.php';
 include "../partials/_dbconnect.php";



 if(isset($_GET['appontid'])){
   $apid = $_GET['appontid'];
 }
?>

<section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">GIVE PRESCRIPTION</h5>

              <!-- General Form Elements -->
              <form class="form-horizontal " method="post" action="../source/giveprescriptionsource.php">
                
                <div class="row mb-3">
                  <input type="hidden" name="appointmentid" value="<?php echo $apid; ?>">
                  <label for="inputPassword" class="col-sm-2 col-form-label" >Prescription</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="prescri" required></textarea>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Give Prescription</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>


      </div>
    </section>

<?php
 include 'footerdoctor.php';
?>