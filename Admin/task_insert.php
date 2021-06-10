<?php 
include "../dbcon.php";
$assign =  $_POST['assign_by'];
$message = $_POST['task'];
$emp_id = $_POST['emp_id'];
// print_r($emp_id);

foreach ($emp_id as $emp) {
	// echo $emp;
	$query = "insert into assign_task(task,emp_id,assigned_by) value ('$message','$emp','$assign')";
	mysqli_query($con,$query);
	header('location:task.php');
    
}
?>
