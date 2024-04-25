<?php
 session_start();
 include 'headeradmin.php';
 include "../partials/_dbconnect.php";
?>

<section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">ADD DEPARTMENT</h5>

              <!-- General Form Elements -->
              <form class="form-horizontal " method="post" action="../source/adddepartmentsource.php">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Department Name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="departmentName" required>
                  </div>
                </div>
            
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add Department</button>
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