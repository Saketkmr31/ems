<?php include "../session.php";  ?>
<?php
   include "../dbcon.php";

  $a = $_SESSION['assign_to'];
  $data = "select * from employee where emp_id = $a";
  $result = mysqli_query($con,$data);
  $result2 = mysqli_fetch_array($result);


?>
<?php include "../Admin/header.php";  ?>
<?php include "../Admin/sidebar2.php";  ?>
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
@media(max-width: 700px){
  .content-wrapper {
    margin-left: 21px;
    background: #f2edf3;
    padding: 10px 10px!important;
    width: 100%;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
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
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Leave Reply
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
            <br>
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body table1">
                    <h4 class="card-title">Applied Leave</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Sr.no</th>
                          <th> L From </th>
                          <th> L To </th>
                          <th> Earn Leave </th>
                          <th> Med Leave </th>
                          <th> Cas Leave </th>
                          <th> Status </th>
                          <th> Comment </th>
                          <th> Assign By </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $i = 1;
                          include "../dbcon.php";
                          $b = $_SESSION['assign_to'];
                          $data2 = "select * from apply_leave where apply_by=$b";
                          $result3 = mysqli_query($con,$data2);
                          while ($result4 = mysqli_fetch_array($result3)){
                        ?>
                        <tr class="table-info">
                          <td> <?php echo $i++;?> </td>
                          <td><?php echo $result4['leave_from'];?></td>
                         <td><?php echo $result4['leave_to']; ?></td>
                         <td><?php echo $result4['earning_leave'];?></td>
                         <td><?php echo $result4['medical_leave'];?></td>
                         <td><?php echo $result4['casual_leave'];?></td>
                         <td> <?php echo $result4['status'];?> </td>
                         <td> <?php echo $result4['comment'];?> </td>
                         <?php
                          $data5 = "select * from assign_leave  tl join employee el on tl.assign_by=el.emp_id";
                          $result5 = mysqli_query($con,$data5);
                          $result6 = mysqli_fetch_array($result5);
                          ?>
                         <td><?php echo $result6['f_name'];?> <?php echo $result6['l_name'];?></td>
                        </tr>
                          <?php
                            }
                          ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th> Sr.no</th>
                          <th> L From </th>
                          <th> L To </th>
                          <th> Earn Leave </th>
                          <th> Med Leave </th>
                          <th> Cas Leave </th>
                          <th> Status </th>
                          <th> Comment </th>
                          <th> Assign By </th>
                        </tr>
                    </tfoot>
                    </table>
                  </div>
                </div>
              </div>
          </div>
          <!-- content-wrapper ends -->
        </div>




<?php include "../Admin/footer.php";  ?>