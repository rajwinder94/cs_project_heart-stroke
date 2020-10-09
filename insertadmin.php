<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "volunteer";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$uname = mysqli_real_escape_string($conn, $_REQUEST['username']);
$password = mysqli_real_escape_string($conn, $_REQUEST['passwrd']);
$dob = mysqli_real_escape_string($conn, $_REQUEST['dob']);



$sql="INSERT INTO adminlogin(uname,passwrd,dob) VALUES
('$uname','$password','$dob')";
if(mysqli_query($conn,$sql)){

$_SESSION['login_user'] = $uname;
header("Location: http://localhost:8888/project/admin.php");

}
else{
echo "error";
}

$conn->close();
?>