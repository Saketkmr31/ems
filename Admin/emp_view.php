<?php include "../session.php"; ?>
<?php
  include "../dbcon.php";

  $id = $_GET['id'];
  $data = "select * from employee where emp_id = $id";
  $result = mysqli_query($con,$data);
  $result2 = mysqli_fetch_array($result);
?>

<?php include "header.php";  ?>
<?php include "sidebar.php";  ?>

<style>
  .main-panel{
  width: 100%!important;
}
  .col-md-10{
  margin-top:70px; overflow: scroll; height: 650px; overflow-x: hidden;
}

.content-wrapper {
    background: #f2edf3;
    margin-left: 20px!important;
    padding: 10px 0px 0px 0px!important;
    width: 100%;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
}
.footer{
  margin-left: 20px!important;
  width: 100%;
}
.page-header {
    margin: 0px 0px 1.5rem 20px!important;
}

@media (max-width: 700px){
.footer {
    margin-left: 20px!important;
    width: 100%;
}
</style>

<!-- partial -->
<div class="col-md-10 fixed-right">
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> View Employee
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">View Employee</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> First Name </th>
                          <th> Last name </th>
                          <th> Email </th>
                          <th> Password </th>
                          <th> Age </th>
                          
                          <th> Gender </th>
                          <th> Department </th>
                          <th> Role </th>
                          <th> date_time </th>
                        </tr>
                      </thead>
                      <tbody>
                      	<tr class="table-info">
                          <td> <?php echo $result2['f_name']?> </td>
                          <td> <?php echo $result2['l_name']?> </td>
                          <td> <?php echo $result2['email']?> </td>
                          <td> <?php echo $result2['password']?> </td>
                          <td> <?php echo $result2['age']?> </td>
                         
                          <td> <?php echo $result2['gender']?> </td>
                          <td> <?php echo $result2['department']?> </td>
                          <td> <?php echo $result2['role']?> </td>
                          <td> <?php echo $result2['date_time']?> </td>
                        </tr>
                      </tbody>
                  </table>
                  </div>
                </div>
              </div>
          </div>
          <!-- content-wrapper ends -->
        </div>


<?php include "footer.php"; ?>