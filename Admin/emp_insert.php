<?php include "../session.php"; ?>
<?php
  include "../dbcon.php";
  
  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $age = $_POST['age'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $department = $_POST['department'];
  $role = $_POST['role'];


  $data = "insert into employee(f_name,l_name,email,password,age,phone,gender,department,role) value ('$f_name','$l_name','$email','$password','$age','$phone','$gender','$department','$role')";
      mysqli_query($con,$data);

  header('location:admin_dashboard.php');
?>