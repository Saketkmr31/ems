<?php include "../session.php"; ?>
<?php

include "../dbcon.php";

$c = $_SESSION['assign_to'];

$password = $_POST['password'];



$data = "update employee set password = '$password' where emp_id  = $c";
$result = mysqli_query($con,$data);
	header('location:emp_dashboard.php');
?>