<?php
 session_start();
 include 'headeradmin.php';
//  include "../partials/_dbconnect.php";
?>

<section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile.jpg" alt="Profile" class="rounded-circle">
              <h2>Abhishek Gawade</h2>
              <h3>student</h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.instagram.com/__abhi_gawade__" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic">I am Abhishek Gawade. Currently studing in S.K.Somaiya collage of arts, science and commerce. i am 21 years old.</p>

                  <h5 class="card-title">PROFILE DETAILS</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">Abhishek Gawade</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Collage</div>
                    <div class="col-lg-9 col-md-8">S.K.Somaiya collage of arts, science and commerce</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Profession</div>
                    <div class="col-lg-9 col-md-8">Student</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8">INDIA</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">Bhandup(W) Mumbai</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">8652315283</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">abhishekgawade102@gmail.com</div>
                  </div>

                </div>

                

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

<?php
 include 'footeradmin.php';
?>