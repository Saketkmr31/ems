<?php include "../session.php"; ?>
<?php
  include "../dbcon.php";
  
  
  $vf = $_POST['valid_from'];
  $vt = $_POST['valid_to'];
  $e = $_POST['earning_leave'];
  $m = $_POST['medical_leave'];
  $c = $_POST['casual_leave'];
  $assign =  $_POST['assign_by'];
  $emp_id = $_POST['emp_id'];


  foreach ($emp_id as $emp) {
  $data = "insert into assign_leave(valid_from,valid_to,earning_leave,medical_leave,casual_leave,assign_by,assign_to) value ('$vf','$vt','$e','$m','$c','$assign','$emp')";
    mysqli_query($con,$data);

  header('location:assign_leave.php');
}
?>