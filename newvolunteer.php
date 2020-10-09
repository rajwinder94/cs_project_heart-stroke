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

<script>  
function validateform(){  
var fname=document.myform.fname.value;
var lname=document.myform.lname.value; 
var address=document.myform.address.value; 
var city=document.myform.city.value; 
var pcode=document.myform.pcode.value;
var phno=document.myform.phno.value; 
var email=document.myform.email.value; 
  
if (fname==null || fname==""){  
  alert("First name can't be blank");  
  return false;  
} 
if (lname==null || lname==""){  
  alert("Last name can't be blank");  
  return false;  
}
if (address==null || address==""){  
  alert("Address can't be blank");  
  return false;  
}
if (city==null || city==""){  
  alert("City can't be blank");  
  return false;  
}
 if (pcode==null || pcode==""){  
  alert("Pincode can't be blank");  
  return false;  
}
if (email==null || email==""){  
  alert("email can't be blank");  
  return false;  
}

var atposition=email.indexOf("@");  
var dotposition=email.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
  alert("Please enter a valid e-mail address");  
  return false;  
  }  

}  
</script> 
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
        <li><a  href="updatevol.php"><span class="glyphicon glyphicon-repeat"></span>Update</a></li>
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


<form name="myform" class="form-horizontal" action="insert.php" method="post" onsubmit="return validateform()">

  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="fname">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lname">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="city">City</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="city" name="city" placeholder="city">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pcode">Pin Code</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pcode" name="pcode" placeholder="Enter a valid pin code">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="phno">Phone No</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="phno" name="phno" placeholder="format:xxx-xxx-xxxx">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email</label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" id="email" name="email" placeholder="xyz@abc.com">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="yofserv">Years Of Service</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="yearofserv" name="yearofserv" placeholder="if any">
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-8">
      <button  type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>


</div> <!-- main container ends  -->

</body>
</html>



