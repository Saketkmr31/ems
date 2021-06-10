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
.border1{
  width: 100%;
    height: 45px;
    line-height: 45px;
    padding-left: 20px;
    border: 0px solid!important;
}
.why{
  background-image: url("../assets/images/leave.svg")!important;
  background-repeat: no-repeat;
    background-size: 36%;
    /*background-blend-mode: hard-light;*/
    background-position-x: right;

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
                </span>Apply Leave
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

             <?php
              include "../dbcon.php";
              $a = $_SESSION['assign_to'];
              $data="select * from assign_leave al join employee el on al.assign_to=el.emp_id where assign_to=$a";
              $query=mysqli_query($con,$data); 
              $result=mysqli_fetch_array($query);
            ?>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px; background-image: linear-gradient( 90.5deg,  rgba(255,207,139,0.50) 1.1%, rgba(255,207,139,1) 81.3% )!important;">
                    <h3 class="card-title">Apply Leave</h3>
                  </div>

                  <div class="card-body" style="background-color: #A9C9FF;
                   background-image: linear-gradient(180deg, #A9C9FF 0%, #FFBBEC 100%)!important;">
                    <br><br>

                    <form method="post" action="apply_leave_insert.php">
                    <div class="row">
                      <div class="col-md-12 form-group">
                       <div class="col-md-12">
                          <div class="card why" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; padding: 30px;background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(234,249,249,0.67) 0.1%, rgba(239,249,251,0.63) 90.1% );padding-left: 70px">
                            
                              <div class="card-title"><h2>Assigned Leave</h2></div>

                                <div class="row">
                                <div class="col-md-6 form-group">
                                  <b>Valid From:</b>
                                  <div class="border border1"><small><?php echo $result['valid_from']?></small></div>
                                </div>
                                <div class="col-md-6 form-group">
                                  <b>Valid To:</b>
                                  <div class="border border1"><small><?php echo $result['valid_to']?></small></div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6 form-group">
                                  <b>Earning Leave:</b>
                                  <div class="border border1"><small><?php echo $result['earning_leave']?></small></div>
                                </div>
                                <div class="col-md-6 form-group">
                                  <b>Medical Leave:</b>
                                  <div class="border border1"><small><?php echo $result['medical_leave']?></small></div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6 form-group">
                                  <b>Casual Leave:</b>
                                  <div class="border border1"><small><?php echo $result['casual_leave']?></small></div>
                                </div>
                                <?php
                                  $data5 = "select * from assign_leave  tl join employee el on tl.assign_by=el.emp_id";
                                  $result5 = mysqli_query($con,$data5);
                                  $result6 = mysqli_fetch_array($result5);
                                ?>
                                <div class="col-md-6 form-group">
                                  <b>Assigned By:</b>
                                  <div class="border border1"><small><?php echo $result6['f_name']?> <?php echo $result6['l_name']?></small></div>
                                </div>
                                </div>
                                   
                          </div>
                        </div>
                      </div>
                    </div>


                    
                    <div class="row">
                      <div class="col-md-2



                      "></div>
                      <div class="card card-body col-md-8">
                              <?php
                              $a=$_SESSION['assign_to'];
                              $data="select * from assign_leave where assign_to=$a";
                              $query=mysqli_query($con,$data);
                              while ($result=mysqli_fetch_array($query)) {
                                # code...
                              
                              
                              
                              
                              ?>
                              <div class="card-title"><h2>Apply Leave</h2></div>
                              <input type="hidden" name="apply_by" value="<?php echo $_SESSION['assign_to']?>";>
                              <div class="form-group">
                              <label>Leave From:</label>
                              <input type="date" name="leave_from" class="form-control">
                              </div>

                              <div class="form-group">
                              <label>Leave To:</label>
                              <input type="date" name="leave_to" class="form-control">
                              </div>

                              <div class="form-group">
                              <label>Earning Leave:</label>
                              <input type="text" name="earning_leave" class="form-control">
                              </div>

                              <div class="form-group">
                              <label>Medical Leave:</label>
                              <input type="text" name="medical_leave" class="form-control">
                              </div>

                              <div class="form-group">
                              <label>Casual Leave:</label>
                              <input type="text" name="casual_leave" class="form-control">
                              </div>
                              <br>
                              <button type="submit" class="btn btn-sm btn-info btn-block form-control">Submit</button>
                        </form>
                      <?php }?>
                        </div>
                        <div class="col-md-2"></div>


                      </div>

                      <div class="col-md-2">
                      </div>
                    </div>
              </div>
            </div>
          </div>
            



<?php include "../Admin/footer.php";  ?>