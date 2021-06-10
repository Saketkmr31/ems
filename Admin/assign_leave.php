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
  
  <style>
  .main-panel{
  width: 100%!important;
}
  .col-md-10{
  margin-top:70px; overflow: scroll; height: 650px; overflow-x: hidden;
}

.content-wrapper {
    background: #f2edf3;
    margin-left: 5px!important;
    padding: 20px 0px 0px 0px!important;
    width: 127%;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
}
.footer{
  margin-left: 5px!important;
  width: 127%;
}
.page-header {
    margin: 0px 0px 1.5rem 20px!important;
}
@media(max-width: 700px){
   .footer{
  margin-left: 5px!important;
  width: 105%;
}

.content-wrapper {
    width: 105%!important;
}

}

</style>

<div class="col-md-10 fixed-right" style="position: relative;">
<!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-contacts menu-icon"></i>
                </span> Assign Leave
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
                    <h3 class="card-title">Welcome Admin!!</h3><span><?php echo $result2['f_name']?> <?php echo $result2['l_name']?></span>
                  </div>
              </div>
            </div>

<!-- all assigned leave -->
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px; background-image: linear-gradient( 90.5deg,  rgba(255,207,139,0.50) 1.1%, rgba(255,207,139,1) 81.3% )!important;">
                    <h3 class="card-title">Assign Leave</h3>
                    <a href="all_assigned_leave.php" class="btn btn-info float-right" style="margin-top: -40px;">All Asigned Leave</a>
                  </div>

                  <div class="card-body" style="background-color: #A9C9FF;
                   background-image: linear-gradient(180deg, #A9C9FF 0%, #FFBBEC 100%)!important;">
                    <br><br>
                    <div class="row">
                      <div class="col-md-4">
                       <div style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px; background-color: #FFDEE9;background-image: linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%)!important;padding: 10px;">
                    <h3>Employee</h3>
                  </div>
                  <!-- form starts -->
                  <br><br>
                       <form method="post" action="leave_insert.php">
                        <?php 
                          include "../dbcon.php";
                          $data = "select * from employee where role = 'Employee'";
                          $result = mysqli_query($con,$data);
                          while ($result2 = mysqli_fetch_array($result)){
                          ?>
                        <div class="form-group">
                          <input type="hidden"  name="assign_by" value="<?php echo $_SESSION['admin_id'] ?>">
                          <input type="checkbox" name="emp_id[]" value="<?php echo $result2['emp_id']?>">
                          <label><?php echo $result2['f_name']?> <?php echo $result2['l_name']?></label>
                        </div>
                        <?php
                          }
                        ?>
                      </div>
                      <div class="col-md-8 card card-body">
                        <div class="form-group">
                           <label>Valid From</label>
                           <input type="date" name="valid_from" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>Valid To</label>
                           <input type="date" name="valid_to" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>Earning Leave</label>
                           <input type="text" placeholder="No. of Leave" name="earning_leave" class="form-control">
                        </div>
                        <div class="form-group">
                           <label>Medical Leave</label>
                           <input type="text" name="medical_leave" class="form-control" placeholder="No. of Leave">
                        </div>
                        <div class="form-group">
                           <label>Casual Leave</label>
                           <input type="text" name="casual_leave" class="form-control" placeholder="No. of Leave">
                        </div>
                        <input type="submit" value="Assign Leave" class="btn btn-info">
                      </div>
                      </form>
                      <!-- form end -->
                    </div>
                  </div>
              </div>
            </div>
          </div>
            



<?php include "footer.php";  ?>