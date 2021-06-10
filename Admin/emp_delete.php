<?php include "../session.php"; ?>
<?php
include "../dbcon.php";

$id = $_GET['id'];

// echo $id;
$q="delete from employee where emp_id=$id";
mysqli_query($con,$q);
header('location:dashboard.php');

?>