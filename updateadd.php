<?php 
session_start();
$con = mysqli_connect('localhost', 'root', 'password', 'project');
         
        // connect to database
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        
    $id = mysqli_real_escape_string($con, $_REQUEST['sel1']);    
        $_SESSION["id"] = $id;
       $sql = "SELECT * FROM volunteer WHERE canvasser_ID='$id'";
       $result = $con->query($sql);
       while($row = $result->fetch_assoc()) { ?>
         
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
  		
<div class="container" style="margin-left:5%">	 
<div class="container">
  <h2>Login for Admin Portal</h2>
     
<div class="container" style="margin-left:5%">	 
</div>


<form name="myform" class="form-horizontal" action="update.php" method="post" onsubmit="return validateform()">

  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="fname">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fname" name="fname" value='<?php echo $row["first_name"];?>'></br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lname">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="lname" name="lname" value='<?php echo $row["last_name"];?>'></br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="address" name="address" value='<?php echo $row["address"];?>'></br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="city">City</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="city" name="city" value='<?php echo $row["city"];?>'></br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pcode">Pin Code</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pcode" name="pcode" value='<?php echo $row["pin_code"];?>'></br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="phno">Phone No</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="phno" name="phno" value='<?php echo $row["phone"];?>'></br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email</label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" id="email" name="email" value='<?php echo $row["email"];?>'></br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="yofserv">Years Of Service</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="yearofserv" name="yearofserv" value='<?php echo $row["years_of_service"];?>'></br>
    </div>
  </div>
<div class="form-group">
    <label class="control-label col-sm-2" for="rdate">Registration date</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="regdate" name="regdate" value='<?php echo $row["reg_date"];?>'></br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="capfn">Assigned captain first name</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="capfn" name="capfn" value='<?php echo $row["cap_fname"];?>'> </br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="capln">Assigned captain last name</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="capln" name="capln" value='<?php echo $row["cap_lname"];?>'></br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="zone">Zone</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="zone" name="zone" value='<?php echo $row["zone"];?>'></br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="com">Community</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="com" name="com" value='<?php echo $row["community"];?>'></br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="area">Assigned area</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="area" name="area" value='<?php echo $row["area"];?>'></br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="route">Route</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="route" name="route" value='<?php echo $row["route"];?>'></br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="rdesc">Rout discription</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="rdesc" name="rdesc" value='<?php echo $row["route_desc"];?>'></br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="rgen">Revenue Generated</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="rgen" name="rgen" value='<?php echo $row["revenue_gen"];?>'></br>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>


</div> <!-- main container ends  -->
<?php } ?>
</body>
</html>
