<?php
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
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"SELECT uname FROM adminlogin WHERE uname = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['uname'];
   
   if(!isset($_SESSION['login_user'])){
      header("Location: http://localhost:8888/project/adminlogin.php");
   }
?>