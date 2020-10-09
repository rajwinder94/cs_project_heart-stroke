<?php
session_start();
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

$area = mysqli_real_escape_string($conn, $_REQUEST['area']);
$point = mysqli_real_escape_string($conn, $_REQUEST['point']);
$latt = mysqli_real_escape_string($conn, $_REQUEST['latt']);
$long = mysqli_real_escape_string($conn, $_REQUEST['long']);
$zone = mysqli_real_escape_string($conn, $_REQUEST['zone']);


$sql="INSERT INTO area VALUES
('$area','$point','$latt','$long','$zone')";
if(mysqli_query($conn,$sql)){
header("Location: http://localhost:8888/project/map.php");

}
else{
echo "error";
}

$conn->close();
?>