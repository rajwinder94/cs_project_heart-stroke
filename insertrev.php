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

$year = mysqli_real_escape_string($conn, $_REQUEST['year']);
$revenue = mysqli_real_escape_string($conn, $_REQUEST['revenue']);



$sql="INSERT INTO revenue(year,revenue_gen) VALUES ('$year','$revenue')";
if(mysqli_query($conn,$sql)){
header("Location: http://localhost/cs_project/admin.php");
}
else{
echo "error";
}

$conn->close();
?>
