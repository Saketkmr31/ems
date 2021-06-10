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
.table th img, .table td img {
    width: 20px!important;
    height: 20px!important;
    border-radius: 100%!importnant;
}
.stretch-card > .card {
    width: 100%!important;
    min-width: 109%!important;
    margin-left: -44px!important;
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
.stretch-card > .card3 {
    width: 100%!important;
    min-width: 117%!important;
    margin-left: -24px!important;
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
                </span> All Assigned Leave
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <br>
            <div class="col-lg-12 stretch-card">
                <div class="card card3">
                  <div class="card-body table1">
                    <h4 class="card-title">Assigned Leave</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Sr.No</th>
                          <th> Emp Name </th>
                          <th> Leave From </th>
                          <th> Leave To </th>
                          <th> Earning Leave </th>
                          <th> Medical Leave </th>
                          <th> Casual Leave </th>
                          <th> Status </th>
                          <th> Comment </th>
                          <th> Status </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $i = 1;
                          include "../dbcon.php";
                          $data = "select * from apply_leave t1 join employee e2 on t1.apply_by=e2.emp_id";
                          $result = mysqli_query($con,$data);

                          while ($result2 = mysqli_fetch_array($result)){
                            
                        ?>
                        <tr class="table-info">
                          <td> <?php echo $i++;?> </td>
                          <td> <?php echo $result2['f_name']?> <?php echo $result2['l_name']?></td>
                          <td> <?php echo $result2['leave_from']?> </td>
                          <td> <?php echo $result2['leave_to']?> </td>
                          <td> <?php echo $result2['earning_leave']?> </td>
                          <td> <?php echo $result2['medical_leave']?> </td>
                          <td> <?php echo $result2['casual_leave']?> </td>
                          <td> <?php echo $result2['status']?> </td>
                          <td> 
                            <form method="post" action="applyleave_update.php">
                              <textarea class="form-control" name="comment"></textarea>
                          </td>
                          <input type="hidden" name="a_id" value="<?php echo $result2['a_id'];?>">
                          <td> 
                            <center>
                            <button class="btn btn-success" name="approved" type="submit">Approve</button>
                            <br><br>
                            <button class="btn btn-danger" name="rejected" type="submit">Reject</button>
                            </center>


                            </form>
                          </td>
                        </tr>
                          <?php
                            }
                          ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th> Sr.No</th>
                          <th> Leave From </th>
                          <th> Leave To </th>
                          <th> Earning Leave </th>
                          <th> Medical Leave </th>
                          <th> Casual Leave </th>
                          <th> Apply by </th>
                          <th> Status </th>
                          <th> Comment </th>
                          <th> Status </th>
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