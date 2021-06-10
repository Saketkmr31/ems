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
    width: 100%;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
}
.footer{
  margin-left: 5px!important;
  width: 100%;
}
.page-header {
    margin: 0px 0px 1.5rem 20px!important;
}

@media (max-width: 700px){
.footer {
    margin-left: 5px!important;
    width: 100%;
}
</style>

<div class="col-md-10 fixed-right">
<!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-contacts menu-icon"></i>
                </span> Registration
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
            <div class="col-12 grid-margin stretch-card">
                <div class="card" style="background-color: #5fdaff61!important;">
                  <div class="card-body">
                    <h4 class="card-title">Employee Registration</h4>
                    <p class="card-description">Employee</p>
                    <!-- form start -->
                    <form method="post" action="emp_insert.php">
                    	
                      <div class="form-group">
                        <label for="exampleInputName1">First Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="f_name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="l_name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail3" placeholder="Password" name="password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Age</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Age" name="age">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Phone</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Phone no." name="phone">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Gender</label><br>
                        <small><input type="radio" name="gender" value="male">Male</small>
			            <small><input type="radio" name="gender" value="female">Female</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Department</label>
                        <select class="form-control" id="exampleSelectGender" name="department">
                          <option>Select</option>
                          <option>CSE</option>
                          <option>ECE</option>
                          <option>Mechanical</option>
                          <option>IT</option>
                          <option>Civil</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Role</label>
                        <select class="form-control" id="exampleSelectGender" name="role">
                          <option>Select</option>
                          <option>Admin</option>
                          <option>Employee</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>


<?php include "footer.php";  ?>