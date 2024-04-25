<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark font-weight-bold py-3">
    <a class="navbar-brand" href="#">
    <img src="adminpanel/assets/img/logoo.png" width="30" height="30" alt="">
    </a>
       <a class="navbar-brand" href="#">HEALTHFIRST</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../public/homepage.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/aboutus.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/contactus.php">Contact us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../admin/patientlogin.php">Patient</a>
            <a class="dropdown-item" href="../admin/doctorlogin.php">Doctor</a>
            <a class="dropdown-item" href="../admin/adminlogin.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/ourdoctor.php">Our Doctors</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>