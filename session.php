<?php 
session_start();
if(empty($_SESSION['message']))
{
header("location:index.php");
}
?>