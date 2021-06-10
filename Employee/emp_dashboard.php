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
.border1{
  width: 100%;
    height: 45px;
    line-height: 45px;
    padding-left: 20px;
    border: 0px solid!important;
}
.why{
  background-image: url("../assets/images/emp2.svg")!important;
  background-repeat: no-repeat;
    background-size: 36%;
    /*background-blend-mode: hard-light;*/
    background-position-x: right;

}
@media(min-width:500){
  .card-body2{
    width: 534px!important;
    margin-left: -47px;
  }
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
   
.card .card-body {
    padding: 10px 10px!important;
}
}
@media(max-width: 500px){
   .footer{
  margin-left: 21px!important;
  width: 105%;
}
  .card-body2{
    width: 357px!important;
    margin-left: -68px;
  }
  .card-title1{
    color: #343a40;
    margin-bottom: 0.75rem;
    text-transform: capitalize;
    font-family: "ubuntu-medium", sans-serif;
    font-size: 1.125rem;
    margin-left: 66px;
  }
  .marg-one{
        margin-top: -90px;
  }
}

</style>


      <div class="col-md-10 fixed-right">
<!-- partial --> 
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- session login -->
            <div class="row" id="proBanner">
              <div class="col-12">
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
                </span> Profile
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
                    <h3 class="card-title">Welcome!!</h3><span><?php echo $_SESSION['data']?> <?php echo $_SESSION['data2']?></span>
                  </div>
              </div>
            </div>
            <br>
            <div class="col-lg-12 stretch-card">
                <div class="card" style="background-image: radial-gradient( circle 993px at 0.5% 50.5%,  rgba(137,171,245,0.37) 0%, rgba(245,247,252,1) 100.2% );">
                  <div class="card-body table1 card-body2">
                    <h4 class="card-title1">Profile Page</h4>
                    <br><br>
                    <div class="container" style="">
                      <div class="col-md-12">
                    	<div class="row">
                          <div class="col-md-5">
                            <br><br><br>
                            <div class="card marg-one" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;background-image: radial-gradient( circle 321px at 8.3% 75.7%,  rgba(209,247,241,1) 0%, rgba(249,213,213,1) 81% );">
                            <img src="../assets/images/employee1.svg" style="width: 70%;margin-left: 55px;margin-top: 15px">
                            <div class="card-title text-center"><?php echo $_SESSION['data']?> <?php echo $_SESSION['data2']?></div>
                            <br>
                            <a href="pass_edit.php" class="btn btn-info" data-toggle="modal" data-target="#zz">Update Password</a>
                          </div>
                        </div>

                        <div class="col-md-7">
                          <div class="card why" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; padding: 30px;background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(234,249,249,0.67) 0.1%, rgba(239,249,251,0.63) 90.1% );">
                            
                              <div class="card-title"><h2>Profile</h2></div>

                                <div class="row">
                                <div class="col-md-6 form-group">
                                  <b>First Name:</b>
                                  <div class="border border1"><small><?php echo $result2['f_name']?></small></div>
                                </div>
                                <div class="col-md-6 form-group">
                                  <b>Last Name:</b>
                                  <div class="border border1"><small><?php echo $result2['l_name']?></small></div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6 form-group">
                                  <b>Email:</b>
                                  <div class="border border1"><small><?php echo $result2['email']?></small></div>
                                </div>
                                <div class="col-md-6 form-group">
                                  <b>Password:</b>
                                  <div class="border border1"><small><?php echo $result2['password']?></small></div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6 form-group">
                                  <b>Age</b>
                                  <div class="border border1"><small><?php echo $result2['age']?></small></div>
                                </div>
                                <div class="col-md-6 form-group">
                                  <b>Phone:</b>
                                  <div class="border border1"><small><?php echo $result2['phone']?></small></div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6 form-group">
                                  <b>Gender:</b>
                                  <div class="border border1"><small><?php echo $result2['gender']?></small></div>
                                </div>
                                <div class="col-md-6 form-group">
                                  <b>Department:</b>
                                  <div class="border border1"><small><?php echo $result2['department']?></small></div>
                                </div>
                                </div>
                                   
                          </div>
                        </div>
                    	</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <section>
  <!-- Button trigger modal -->
<div class="modal fade" id="zz">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-content">
                <img src="" class="w-100">
            </div>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Password</h5>
                   <button type="button" class="close" data-dismiss="modal">
                      <span >&times;</span>
                   </button>
            </div>
    <!-- Button trigger modal -->
            <div class="modal-body">
                <form method="post" action="pass_update.php">

                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" placeholder="Password" name="password" value="<?php echo $result2['password']?>">
                      </div>

                      <center>     
                        <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
                      </center>
                  </form>
            </div>
        </div>
    </div><!----- model fade div end-------->
  </div>
</section>

<?php include "../Admin/footer.php";  ?>