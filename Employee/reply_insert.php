<?php
include "../dbcon.php";
$d=$_POST['task'];
$a=$_POST['reply_by'];
$b=$_POST['t_id'];
$c=$_POST['reply_message'];

$data="insert into reply_task(task,reply_by,t_id,reply_message) value('$d','$a','$b','$c')";
$result = mysqli_query($con,$data);
header('location:task.php');

?>