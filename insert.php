<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$lastname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$city = mysqli_real_escape_string($conn, $_REQUEST['city']);
$pincode = mysqli_real_escape_string($conn, $_REQUEST['pcode']);
$phoneno = mysqli_real_escape_string($conn, $_REQUEST['phno']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$yofservice = mysqli_real_escape_string($conn, $_REQUEST['yearofserv']);


$sql="INSERT INTO Volunteer(first_name,last_name,address,city,pin_code,phone,email,years_of_service) VALUES
('$firstname','$lastname','$address','$city','$pincode','$phoneno','$email','$yofservice')";
if(mysqli_query($conn,$sql)){
header("Location: http://localhost/cs_project/updateadd.php");
}
else{
echo "error";
}

$conn->close();
?>
