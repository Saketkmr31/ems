<?php include "../session.php"; ?>
<?php

   include "../dbcon.php";
   $id = $_GET['id'];
   
   $data = "select * from employee where emp_id = $id";
   $result = mysqli_query($con,$data);
   $result2 = mysqli_fetch_array($result);

?>
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
<?php include "header.php";  ?>
<?php include "sidebar.php";  ?>

<div class="col-md-10 fixed-right">
    <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Edit Employee
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
                <div class="card" style="background-color: #5fdaff61!important;">
                  <div class="card-body">
                    <h4 class="card-title">Employee Registration</h4>
                    <p class="card-description">Employee</p>
                    <!-- form start -->
                    <form method="post" action="emp_update.php">
                    	<input type="hidden" name="emp_id" value="<?php echo $result2['emp_id']?>">

                    	
                      <div class="form-group">
                        <label for="exampleInputName1">First Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="f_name" value="<?php echo $result2['f_name']?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="l_name" value="<?php echo $result2['l_name']?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email" value="<?php echo $result2['email']?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail3" placeholder="Password" name="password" value="<?php echo $result2['password']?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Age</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Age" name="age" value="<?php echo $result2['age']?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Phone</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Phone no." name="phone" value="<?php echo $result2['phone']?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Gender</label><br>
                        <small><input type="radio" name="gender" value="male"
                        	<?php
                        	  if ($result2['gender']=='male'){
                        	  	echo 'checked';
                        	  }
                        	?>
                        	>Male</small>
			            <small><input type="radio" name="gender" value="female"
			            	<?php
                        	  if ($result2['gender']=='female'){
                        	  	echo 'checked';
                        	  }
                        	?>
			            	>Female</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Department</label>
                        <select class="form-control" id="exampleSelectGender" name="department">
                          <option>Select</option>
                          <option value="CSE"
                          <?php
                            if ($result2['department']=='CSE'){
				   	        echo 'selected';
				              }
                          ?>
                          >CSE</option>
                          <option value="ECE"
                          <?php
                            if ($result2['department']=='ECE'){
				   	        echo 'selected';
				              }
                          ?>
                          >ECE</option>
                          <option value="mechanical
                          "
                          <?php
                            if ($result2['department']=='mechanical'){
				   	        echo 'selected';
				              }
                          ?>
                          >Mechanical</option>
                          <option value="it"
                          <?php
                            if ($result2['department']=='it'){
				   	        echo 'selected';
				              }
                          ?>
                          >IT</option>
                          <option value="civil"
                          <?php
                            if ($result2['department']=='civil'){
				   	        echo 'selected';
				              }
                          ?>
                          >Civil</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Role</label>
                        <select class="form-control" id="exampleSelectGender" name="role">
                          <option>Select</option>
                          <option value="Admin"
                          <?php
                            if ($result2['role']=='Admin'){
				   	        echo 'selected';
				              }
                          ?>
                          >Admin</option>
                          <option value="Employee"
                          <?php
                            if ($result2['role']=='Employee'){
				   	        echo 'selected';
				              }
                          ?>
                          >Employee</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
                      <a href="dashboard.php"><button class="btn btn-light">Cancel</button></a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          



<?php include "footer.php";  ?>