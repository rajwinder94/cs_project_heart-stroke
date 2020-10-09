<?php
session_start();
?>
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
  <h2>Add Year and revenue</h2>

 <div class="row">
    <div class="col-sm-12">
    <form name="myform" class="form-horizontal" action="insertrev.php" method="post">
    <div class="form-group">
    <label class="control-label col-sm-2" for="fname">Year</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="year" name="year" placeholder="yyyy">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lname">Revenue in $</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="revenue" name="revenue" placeholder="$-----">
    </div>
  </div>
  <input type="submit" value="Add" />
    </form>
    </div>
    
  


  
  
</body>
</html>