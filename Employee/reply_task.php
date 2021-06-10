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
                </span>Reply Task
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
              $a=$_GET['id'];
              $data="select * from assign_task where t_id=$a ";
              $query=mysqli_query($con,$data); 
              $result=mysqli_fetch_array($query);
            ?>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px; background-image: linear-gradient( 90.5deg,  rgba(255,207,139,0.50) 1.1%, rgba(255,207,139,1) 81.3% )!important;">
                    <h3 class="card-title">Reply Task</h3>
                  </div>

                  <div class="card-body" style="background-color: #A9C9FF;
                   background-image: linear-gradient(180deg, #A9C9FF 0%, #FFBBEC 100%)!important;">
                    <br><br>

                    <form method="post" action="reply_insert.php">
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <div class="form-group">
                          <input type="hidden" name="t_id" value="<?php echo $result['t_id'] ?>">

                          <textarea class="form-control text-center" name="task" style="width: 100%;height: 100px;font-size: 20px;"><?php echo $result['task']?></textarea>

                          <br>
                        </div>
                      </div>
                    </div>


                    
                    <div class="row">
                      <div class="col-md-2">
                      </div>

                      <div class="col-md-8 text-center" style="margin-top: -60px;">
                      
                        <div class="form-group">
                          <input type="hidden" name="reply_by" value="<?php echo $result2['emp_id']?>">
                          <br>
                          <input type="hidden" name="t_id" value="<?php echo $result['t_id'] ?>">
                          <br>
                          <textarea class="form-control" name="reply_message" placeholder="Start Typing..." style="width: 100%;height: 150px;"></textarea>
                          <br>
                          <button style="background: #51c5c5;" type="submit" class="btn btn-info">Submit</button>
                          </div>
                        </div>
                      </form>


                      </div>

                      <div class="col-md-2">
                      </div>
                    </div>
              </div>
            </div>
          </div>
            



<?php include "../Admin/footer.php";  ?>