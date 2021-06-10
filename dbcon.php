
<?php

//mysqli_connect("hostname","username","password","database name");
$con = mysqli_connect("localhost","root","","ems");

if($con)
{
	// echo "connect";
}
else{
	// echo "not connect";
}

?>