<?php
 session_start();
 include 'headerpatient.php';
 include "../partials/_dbconnect.php";
?>

<?php 
if(isset($_SESSION['email'])){
    $email = $_SESSION['email']; 
    $sql1 = "SELECT * FROM register where email = '$email'";
    $query1 = mysqli_query($conn,$sql1);
    if(mysqli_num_rows($query1)>0){
        while($row=mysqli_fetch_assoc($query1))
        { 
            $patientid = $row['id'];
          
         }
    }
}

?>
<section id="main-content">
      <section class="wrapper">
      <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i><b> MY PRESCRIPTIONS</b></h3>

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
              
              $sql="SELECT * FROM `prescription` WHERE `patientid` LIKE '$patientid'";
              $result=mysqli_query($conn,$sql);


             ?>

              <table class="table datatable table-advance table-hover">

                <head>
                  <tr>
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
                    <td> <?php echo $row['prescri']; ?></td>
                    <td>
                      <a href='../source/deleteprescriptionpatientsource.php?id=<?php echo $row['id'];?>'><input type="submit" value="Delete" class="delete"></a>
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
 include 'footerpatient.php';
?>