<?php
 session_start();
 include 'headeradmin.php';
 include "../partials/_dbconnect.php";
?>

<section id="main-content">
      <section class="wrapper">
      <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i><b> ALL PRESCRIPTIONS </b></h3>

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
              
              $sql="SELECT * FROM `prescription`";
              $result=mysqli_query($conn,$sql);


             ?>

              <table class="table datatable table-advance table-hover">

                <head>
                  <tr>
                    <th>ID</th>
                    <th>PRESCRIPTION</th>
                    <th>DELETE</th>
                    

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
                    <td> <?php echo $row['id']; ?></td>
                    <td> <?php echo $row['prescri']; ?></td>
                    <td>
                      <a href='../source/deleteprescriptionadminsource.php?id=<?php echo $row['id'];?>'><input type="submit" value="Delete" class="delete"></a>
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