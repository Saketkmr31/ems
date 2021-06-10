<?php include "../session.php";  ?>
<?php
   include "../dbcon.php";

  $data = "select * from employee";
  $result = mysqli_query($con,$data);
  $result2 = mysqli_fetch_array($result);


?>
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
              $t_id=$_GET['t_id'];
              $data="select * from reply_task where t_id=$t_id";
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
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <div class="form-group">
                          <textarea class="form-control text-center" name="task" style="width: 100%;height: 100px;font-size: 20px;"><?php 
                             if ($result==""){
                                 echo "Not reply";
                               }
                             else{
                                 echo $result['task'];
                               }
                          ?></textarea>
                          <br>
                        </div>
                      </div>
                    </div>


                    
                    <div class="row">
                      <div class="col-md-2">
                      </div>

                      <div class="col-md-8 text-center" style="margin-top: -60px;">
                      <form method="post" action="reply_insert.php">
                        <div class="form-group">
                          <textarea class="form-control" placeholder="Start Typing..." style="width: 100%;height: 150px;"><?php 
                             if ($result==""){
                                 echo "Not reply";
                               }
                             else{
                                 echo $result['reply_message'];
                               }
                          ?></textarea>
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
            



<?php include "footer.php";  ?>