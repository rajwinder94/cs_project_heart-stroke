<!DOCTYPE html>
<html> 
<head>
		
<title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<style>
 .margin {margin-bottom: 45px;}
 #hov{font-size: 20px;}
 #hov:hover {color:red;}
 
 p, span, ul, li, button {
  font-family: inherit;
  font-size: inherit;
  font-weight: inherit;
  line-height: inherit;
}

strong {
  font-weight: 600;
}

strong {
  font-weight: 600;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Open Sans", "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
  line-height: 1.5em;
  font-weight: 300;
}

strong {
  font-weight: 400;
}

.tile {
  width: 95%
  display: inline-block;
  box-sizing: border-box;
  background: #fff;
  padding: 20px;
  margin-bottom: 30px;
}
.tile .title {
  margin-top: 0px;
}
.tile.purple, .tile.blue, .tile.red, .tile.orange, .tile.green {
  color: #fff;
}
.tile.purple {
  background: #5133AB;
}
.tile.purple:hover {
  background: #3e2784;
}
.tile.red {
  background: #AC193D;
}
.tile.red:hover {
  background: #7f132d;
}
.tile.green {
  background: #00A600;
}
.tile.green:hover {
  background: #007300;
}
.tile.blue {
  background: #2672EC;
}
.tile.blue:hover {
  background: #125acd;
}
.tile.orange {
  background: #DC572E;
}
.tile.orange:hover {
  background: #b8431f;
}



a{
color:white;
text-decoration:none;
}
a:hover{
color:white;
text-decoration:none;
}


</style>
<body>
<div class="container-fluid"> <!-- main container start  -->
<div class="row"> <!-- start nav row-->
<nav class="col-lg-12 navbar  navbar-default navbar-fixed" style="background-color:white">
          		
              <div class="row">
              <div class="col-lg-3">
              <img src="images/logo.jpg" style="margin-left:20%;" />
              </div>
              <div class="col-lg-9">
          		<div class="container-fluid">
    <div class="navbar-header" style="float: right;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 

      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="margin:2%">
     
     <ul class="nav navbar-nav navbar-center">
      <li><a  href="admin.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
        <li><a  href="logout.php"><span class="glyphicon glyphicon-log-out"></span>logout</a></li>
        
      </ul>
    </div>
    </div>
    </div>
  </div>
  </div>
  			 </nav> 
  		</div>
  		<div class="container">
  		<div class="row">
  		<div class="col-sm-12">
<h2>Kit Tracking</h2></div>
</div>
</div>
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
$cfname = mysqli_real_escape_string($conn, $_REQUEST['cfname']);
$clname = mysqli_real_escape_string($conn, $_REQUEST['clname']);

$sql = "SELECT * FROM volunteer WHERE cap_fname='$cfname' AND cap_lname='$clname'";
$sno=1;
       $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) { ?>
        
        
    <div class="form-group">
    <label class="control-label col-sm-2" for="rgen"><?php echo "Record".$sno?></label>
    <div class="col-sm-10"> 
    <label class="control-label col-sm-2" for="rgen">Canvasser Id</label><input type="text" class="form-control" id="kitid" name="kitid" value='<?php echo $row["canvasser_ID"];?>'></br>
    <label class="control-label col-sm-2" for="rgen">Canvasser Name</label><input type="text" class="form-control" id="kitid" name="kitid" value='<?php echo $row["first_name"]." ".$row["last_name"];?>'></br>
     <label class="control-label col-sm-2" for="rgen">Kit ID</label><input type="text" class="form-control" id="kitid" name="kitid" value='<?php echo $row["kit_id"];?>'></br>
     <label class="control-label col-sm-2" for="rgen">Status</label><input type="text" class="form-control" id="kitid" name="kitid" value='<?php echo $row["kit_status"];?>'></br>
    </div>
<?php
     $sno++;   };
$conn->close();
?>
</body>
</html>