<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "project";




$conn = new mysqli($servername, $username, $password,$dbname);

$id = mysqli_real_escape_string($conn, $_REQUEST['sel1']);

$sql="DELETE FROM volunteer WHERE canvasser_ID='$id'";
if(mysqli_query($conn,$sql)){
$_SESSION['delete']="set";

 header("Location: http://localhost/cs_project/updatesuccess.php");

}
else{
echo "error";
}



$conn->close();
?>
