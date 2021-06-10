<?php
   include "../dbcon.php";

   
   $data = "select * from employee";
   $result = mysqli_query($con,$data);
   $result2 = mysqli_fetch_array($result);
?>

<?php include "../session.php";  ?>
<?php include "header.php";  ?>
<?php include "sidebar.php";  ?>
<style>
   
         .btn-grad {background-image: linear-gradient(to right, #fc00ff 0%, #00dbde  51%, #fc00ff  100%)}
         .btn-grad {
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         
          a{
            text-decoration: none!important;
          }

          .table1 { 
  width: 100%!important; 
  overflow: scroll!important; 
}
.btn2{
  padding: 10px 10px;
}
.main-panel{
  width: 100%!important;
}
.col-md-10{
  margin-top:70px; overflow: scroll; height: 650px; overflow-x: hidden;
}
@media(max-width: 1000px){
  .content-wrapper {
    margin-left: 21px;
    background: #f2edf3;
    padding: 10px 10px!important;
    width: 100%;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
}
.sidebar{
  margin-top: 0px!important;
  background-color: #ffffff!important;
}
   
.card .card-body {
    padding: 10px 10px!important;
}
}
@media(max-width: 700px){
   .footer{
  margin-left: 21px!important;
  width: 105%;
}

</style>

      <div class="col-md-10 fixed-right">
<!-- partial --> 
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- session login -->
            <div class="row" id="proBanner">
              <div class="col-md-12 col-sm-12">
                <span class="d-flex align-items-center purchase-popup">
                  <div class="alert alert-success text-center col-12" style="margin-top: 15px;">
                    <?php
                      echo $_SESSION['message'];
                    ?>
                  </div>
                  
                  <i class="mdi mdi-close" id="bannerClose"></i>
                </span>
              </div>
            </div>
            <!-- session login end -->
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
                    <h3 class="card-title">Welcome!!</h3><span><?php echo $result2['f_name']?> <?php echo $result2['l_name']?></span>
                  </div>
              </div>
            </div>
            <a href="register.php"><button class="btn-grad btn" style="margin-left: 20px;">Register</button></a>
            <br>
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body table1">
                    <h4 class="card-title">Total Employee</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Sr.no</th>
                          <th> First Name </th>
                          <th> Last name </th>
                          <th> Email </th>
                          <th> Password </th>
                          <th> Department </th>
                          <th> Role </th>
                          <th> Phone No. </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $i = 1;
                          include "../dbcon.php";
                          $data = "select * from employee";
                          $result = mysqli_query($con,$data);
                          while ($result2 = mysqli_fetch_array($result)){

                        ?>
                        <tr class="table-info">
                          <td> <?php echo $i++;?> </td>
                          <td> <?php echo $result2['f_name']?> </td>
                          <td> <?php echo $result2['l_name']?> </td>
                          <td> <?php echo $result2['email']?> </td>
                          <td> <?php echo $result2['password']?> </td>
                          <td> <?php echo $result2['department']?> </td>
                          <td> <?php echo $result2['role']?> </td>
                          <td> <?php echo $result2['phone']?> </td>
                          <td class="text-center">
                            <a href="emp_view.php?id=<?php echo $result2['emp_id']?>" class="btn btn-info btn2" style = "margin-bottom: 5px;">View</a><br>
                            <a href="emp_edit.php?id=<?php echo $result2['emp_id']?>" class="btn btn-warning btn2"  style = "margin-bottom: 5px;">Edit</a><br>
                            <a href="emp_delete.php?id=<?php echo $result2['emp_id']?>" class="btn btn-danger btn2"  style = "margin-bottom: 5px;">Delete</a>
                          </td>
                        </tr>
                          <?php
                            }
                          ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th> Sr.no</th>
                          <th> First Name </th>
                          <th> Last name </th>
                          <th> Email </th>
                          <th> Password </th>
                          <th> Department </th>
                          <th> Role </th>
                          <th> date_time </th>
                          <th> Action </th>
                        </tr>
                    </tfoot>
                    </table>
                  </div>
                </div>
              </div>
          </div>
          <!-- content-wrapper ends -->
        </div>




<?php include "footer.php";  ?>