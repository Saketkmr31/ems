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
                </span> All Assigned Task
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
                <div class="card">
                  <div class="card-body table1">
                    <h4 class="card-title">Assigned Task</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Sr.No</th>
                          <th> Task </th>
                          <th> Emp Name </th>
                          <th> Assigned By </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $i = 1;
                          include "../dbcon.php";
                          $data = "select * from assign_task  tl join employee el on tl.emp_id=el.emp_id";
                          $result = mysqli_query($con,$data);

                          while ($result2 = mysqli_fetch_array($result)){
                            
                        ?>
                        <tr class="table-info">
                          <td> <?php echo $i++;?> </td>
                          <td> <?php echo $result2['task']?> </td>
                          <td> <?php echo $result2['f_name']?> <?php echo $result2['l_name']?></td>
                          <td> <?php echo $_SESSION['data']?> <?php echo $_SESSION['data2']?></td>
                          <td class="text-center">
                            <a href="assign_task.php?id=<?php echo $result2['emp_id']?>" class="btn btn-success btn2 btn-action"><img src="../assets/images/edit.png" alt="logo"/> Edit</a><br>
                            <a href="task_delete.php?id=<?php echo $result2['emp_id']?>" class="btn btn-danger btn2 btn-action"><img src="../assets/images/trash.png" alt="logo"/> Delete</a>
                            <a href="task_status.php?t_id=<?php echo $result2['t_id']?>" class="btn btn-info btn2 btn-action"><img src="../assets/images/search.png" alt="logo"/> Status</a>
                          </td>
                        </tr>
                          <?php
                            }
                          ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th> Sr.No</th>
                          <th> Task </th>
                          <th> Emp Name </th>
                          <th> Assigned By </th>
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