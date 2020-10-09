<?php
 session_start();

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      
      if($_POST['uid']=="rajwinder94" && $_POST['passwd']=="12345"){
      $_SESSION['login_user'] = $_POST['uid'];
      header("Location: http://localhost:8888/project/admin.php");
      }
      else {
     
         header("Location: http://localhost:8888/project/invalidadmin.php");
        
      }
   }
?>

