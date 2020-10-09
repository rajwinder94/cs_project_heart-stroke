<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "project";
$rown=$_SESSION['row'];
 
 
  
for ($x = 0; $x <=$rown; $x++) {
if (isset($_POST['bid'.$x])){
$sid=$_POST['status'.$x];
$name=$_POST['name'.$x];
}
    
}


$conn = new mysqli($servername, $username, $password,$dbname);
$status = mysqli_real_escape_string($conn,$sid);


$sql="UPDATE telerecruiter SET status='$status' WHERE name='$name'";
if(mysqli_query($conn,$sql)){
$_SESSION['teleset']="set";

 header("Location: http://localhost:8888/project/telerecrute.php");

}
else{
echo "error";
}



$conn->close();
?>