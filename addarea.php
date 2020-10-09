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
</div>


<form class="form-horizontal" action="insertarea.php" method="post">

  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="fname">Area</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="area" name="area" placeholder="Enter the area name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lname">Point</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="point" name="point" placeholder="Enter point number">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Lattitude</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="latt" name="latt" placeholder="lattitude">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="city">Longitutde</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="long" name="long" placeholder="longitude">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pcode">Zone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="zone" name="zone" placeholder="zone">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>


</div> <!-- main container ends  -->

</body>
</html>



