<?php
 session_start();
 include 'headerdoctor.php';
 include "../partials/_dbconnect.php";
?>
<?php 
if(isset($_SESSION['email'])){
    $email = $_SESSION['email']; 
    $sql1 = "SELECT * FROM adddoctor where email = '$email'";
    $query1 = mysqli_query($conn,$sql1);
    if(mysqli_num_rows($query1)>0){
        while($row=mysqli_fetch_assoc($query1))
        { 
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
         }
    }
}

?>

<section id="main-content">
      <section class="wrapper">
      <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i><b> Give Prescription</b></h3>

  </div>
</div>
        <div class="row">
          <div class="col-lg-12">

          </div>
        </div>

          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               
              </header>

              <?php
              $sql="SELECT * FROM `appointments` WHERE `doctorName` LIKE '$firstName $lastName'";
              $result=mysqli_query($conn,$sql);


             ?>
                     
              <table class="table datatable table-advance table-hover">

                <head>
                  <tr>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>DATE</th>
                    <th>TIME</th>
                    <!-- <th>DOCTOR NAME</th>
                    <th>SPECIALIZATION</th> -->
                    <th>PHONENUMBER</th>
                    <th>EMAIL</th>
                    <th>PRESCRIPTION</th>
                    


                  </tr>
                </thead>
                <tbody>
                <?php
                if(mysqli_num_rows($result)>0)
                {
                     while($row=mysqli_fetch_assoc($result))
                      {
               ?>

                <tr>
                    <td> <?php echo $row['firstName']; ?></td>
                    <td> <?php echo $row['lastName']; ?></td>
                    <td> <?php echo $row['date']; ?></td>
                    <td> <?php echo $row['time']; ?></td>
                    <!-- <td> <?php echo $row['doctorName']; ?></td> -->
                    <!-- <td> <?php echo $row['specialization']; ?></td> -->
                    <td> <?php echo $row['phoneNumber']; ?></td>
                    <td> <?php echo $row['email']; ?></td>
                    <td>
                      <a href='giveprescriptionform.php?appontid=<?php echo $row['id']; ?>'><input type="submit" value="PRESCRIPTION" class="prescri"></a>
                    </td>

                  </tr>
                  <?php
                     }

                }else{
                    echo"record is not view";
                }

                 ?>
               </tbody>
              </table>
            </section>
          </div>


<?php
 include 'footerdoctor.php';
?>