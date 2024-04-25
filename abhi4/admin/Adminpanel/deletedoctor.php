<?php
 include 'headeradmin.php';
 include "../partials/_dbconnect.php";
?>

<section id="main-content">
      <section class="wrapper">
      <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i> <b>DELETE DOCTORS</b></h3>
    
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
              $sql="SELECT * FROM adddoctor";
              $query=mysqli_query($conn,$sql);


             ?>

              <table class="table datatable table-advance table-hover">

                <head>
                  <tr>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>DOB</th>
                    <th>BLOODGROUP</th>
                    <th>PHONENUMBER</th>
                    <th>EMAIL</th>
                    <th>SPECIALIZATION</th>
                    <th>DELETE</th>


                  </tr>
                </thead>
                <tbody>
                <?php
                if(mysqli_num_rows($query)>0)
                {
                     while($row=mysqli_fetch_assoc($query))
                      {
                      ?>


                <tr>
                    <td> <?php echo $row['firstName']; ?></td>
                    <td> <?php echo $row['lastName']; ?></td>
                    <td> <?php echo $row['DOB']; ?></td>
                    <td> <?php echo $row['bloodgroup']; ?></td>
                    <td> <?php echo $row['phoneNumber']; ?></td>
                    <td> <?php echo $row['email']; ?></td>
                    <td> <?php echo $row['specialization']; ?></td>
                    <td>
                      <a href='../source/deletedoctorsource.php?id=<?php echo $row['id'];?>'><input type="submit" value="Delete" class="delete"></a>
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