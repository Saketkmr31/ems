<style>
  .sidebar{
    background-color: #6e00ff2b!important;
  }
  @media(max-width: 700px){
    .sidebar{
      background-color: white!important;
      margin-top: 0px!important;
    }
  }
</style>
<!-- partial -->
      <div class="container-fluid page-body-wrapper row">
        <div class="col-md-2">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas fixed-left" id="sidebar" style="margin-top: 70px;">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="../assets/images/profile3.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo $_SESSION['data']?> <?php echo $_SESSION['data2']?></span>
                  <span class="text-secondary">Employee</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Employee/emp_dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Employee/task.php">
                <span class="menu-title">Task</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="leave.php">
                <span class="menu-title">Assigned Leave</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="apply_leave_reply.php">
                <span class="menu-title">Leave Reply</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
      </div>