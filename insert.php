<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "project";

// Create connection
$con = mysqli_connect('localhost', 'root', 'password', 'project');

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
exit();
}

$firstname = mysqli_real_escape_string($con, $_REQUEST['fname']);
$lastname = mysqli_real_escape_string($con, $_REQUEST['lname']);
$address = mysqli_real_escape_string($con, $_REQUEST['address']);
$city = mysqli_real_escape_string($con, $_REQUEST['city']);
$pincode = mysqli_real_escape_string($con, $_REQUEST['pcode']);
$phoneno = mysqli_real_escape_string($con, $_REQUEST['phno']);
$email = mysqli_real_escape_string($con, $_REQUEST['email']);
$yofservice = mysqli_real_escape_string($con, $_REQUEST['yearofserv']);


$sql="INSERT INTO volunteer(first_name,last_name,address,city,pin_code,phone,email,years_of_service) VALUES
('$firstname','$lastname','$address','$city','$pincode','$phoneno','$email',$yofservice)";
echo $sql;
if(mysqli_query($con,$sql)){
header("Location:  http://localhost/cs_project/updateadd.php");
}
else{
echo "error";
}

$con->close();
?>
