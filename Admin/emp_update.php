<?php include "../session.php"; ?>
<?php

include "../dbcon.php";

$id = $_POST['emp_id'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$role = $_POST['role'];


$data = "update employee set f_name = '$f_name',l_name = '$l_name',email = '$email',password = '$password',age = '$age',phone = '$phone',gender = '$gender',department = '$department',role = '$role' where emp_id  = $id";
$result = mysqli_query($con,$data);


	header('location:admin_dashboard.php');
?>