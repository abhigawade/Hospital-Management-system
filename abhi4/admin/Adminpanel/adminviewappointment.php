<?php
 include 'headeradmin.php';
 include "../partials/_dbconnect.php";
?>

<section id="main-content">
      <section class="wrapper">
      <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i><b> APPOINTMENT HISTORY </b></h3>

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

              $sql="SELECT * FROM appointments";
              $result=mysqli_query($conn,$sql);


             ?>

              <table class="table datatable table-advance table-hover">

                <head>
                  <tr>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>DOCTOR NAME</th>
                    <th>SPECIALIZATION</th>
                    <th>PHONENUMBER</th>
                    <th>EMAIL</th>
                    <th>UPDATE</th>
                    


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
                    <td> <?php echo $row['doctorName']; ?></td>
                    <td> <?php echo $row['specialization']; ?></td>
                    <td> <?php echo $row['phoneNumber']; ?></td>
                    <td> <?php echo $row['email']; ?></td>
                    <td>
                      <a href='updateappointmentsource.php?id=<?php echo $row['id'];?>'><input type="submit" value="Update" class="update"></a>
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
 include 'footeradmin.php';
?>