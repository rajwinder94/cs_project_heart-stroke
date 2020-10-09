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

$firstname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$lastname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$city = mysqli_real_escape_string($conn, $_REQUEST['city']);
$pincode = mysqli_real_escape_string($conn, $_REQUEST['pcode']);
$phoneno = mysqli_real_escape_string($conn, $_REQUEST['phno']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$regdate = mysqli_real_escape_string($conn, $_REQUEST['regdate']);
$capfname = mysqli_real_escape_string($conn, $_REQUEST['capfn']);
$caplname = mysqli_real_escape_string($conn, $_REQUEST['capln']);
$zone = mysqli_real_escape_string($conn, $_REQUEST['zone']);
$community = mysqli_real_escape_string($conn, $_REQUEST['com']);
$area = mysqli_real_escape_string($conn, $_REQUEST['area']);
$route= mysqli_real_escape_string($conn, $_REQUEST['route']);
$route_desc = mysqli_real_escape_string($conn, $_REQUEST['rdesc']);
$rev_gen = mysqli_real_escape_string($conn, $_REQUEST['rgen']);
$id=$_SESSION["id"];
$yofservice = mysqli_real_escape_string($conn, $_REQUEST['yearofserv']);

$sql="UPDATE volunteer SET first_name='$firstname', last_name='$lastname', address='$address', city='$city', pin_code='$pincode', phone='$phoneno', email='$email', years_of_service='$yofservice', reg_date='$regdate', cap_fname='$capfname', cap_lname='$caplname', zone='$zone', community='$community', area='$area', route='$route', route_desc='$route_desc', revenue_gen='$rev_gen' WHERE canvasser_id='$id'";

if(mysqli_query($conn,$sql)){
$_SESSION["record_updated"] = "set";
echo $_SESSION["id"];
 header("Location: http://localhost/cs_project/updatesuccess.php");


}
else{
echo "error";
}

$conn->close();
?>
