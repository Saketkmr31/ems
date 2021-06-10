<?php
include "../dbcon.php";
if(isset($_POST['approved'])){
  $status="Approved";
  $comment=$_POST['comment'];
  $id=$_POST['a_id'];

  $query="UPDATE apply_leave set status='$status', comment='$comment' where a_id=$id";
	
  $res=mysqli_query($con,$query);
  header("location:emp_assigned_leave.php");
}


if(isset($_POST['rejected'])){
  $status="Rejected";
  $comment=$_POST['comment'];
  $id=$_POST['a_id'];

  $query="UPDATE apply_leave set status='$status', comment='$comment' where a_id=$id";
	
  $res=mysqli_query($con,$query);
  header("location:emp_assigned_leave.php");
}

?>