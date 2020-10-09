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
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAunJk_VhZGBpp9LZvw2B1L_FSkQAZdxZQ&callback=initMap"
  type="text/javascript"></script>
 <style>
html, body {
  height: 100%;
  margin: 0;
}
#map{
  height: 100%;
  width:70%;
  float:right;
}

#searchmap{
float:left;
width:30%;
height:100%;
margin:0%;
background-color:red;
}
  </style>
</head>
<body>
<h1>My first map</h1>
<div class="row"> <!-- start nav row-->
			<nav class="col-lg-12 navbar  navbar-fixed-top navbar-default" style="background-color:white">
          		
              <div class="row">
              <div class="col-lg-3">
              <img src="images/logo.jpg" style="margin-left:20%;"" />
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
      <ul class="nav navbar-nav">
        <li><a id="hov" href="#">Home</a></li>
        <li class="dropdown">
          <a id="hov" class="dropdown-toggle" data-toggle="dropdown" href="#">About Us <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="hov" href="#">Learn About Us</a></li>
            <li><a id="hov" href="#">Contact Us</a></li>
            <li><a id="hov" href="#">Promotions</a></li>
          </ul>
        </li>
        <li><a id="hov" href="#">Resources</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a  href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a  href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a  href="#"><span class="glyphicon glyphicon-stats"></span>Graph</a></li>
      </ul>
    </div>
    </div>
    </div>
  </div>
  			 </nav> 
    </div><!-- end nav row-->
    <div id="searchmap">
    <form class="form-horizontal" action="mapping.php" method="post">

  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="fname">Area</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="aname" name="aname" placeholder="enter area">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lname">zone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="zone" name="zone" placeholder="Enter zone">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>

    </div>
<div id="map"></div>
<form action="mapping.php" method="post" onsubmit="name()"> 
<input id="textbox" name="textbox" type="text" value="auto"/>
<input type="submit" />
</form>

</body>
</html>
<?php
$sql ="SELECT lattitude,longitude FROM Area WHERE area='h'";
$result=$conn->query($sql);
?>

<script>
function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: 50.652796, lng:-120.353199},
          mapTypeId: 'roadmap'
        });

        // Define the LatLng coordinates for the polygon's path.
        var areaA = [
          {lat: 50.65120530000001, lng: -120.33837289999997},
          {lat: 50.65185, lng: -120.33568639999999},
          {lat: 50.650263, lng: -120.335596},
          {lat: 50.649481, lng: -120.337613}
        ];
        
        // Construct the polygon.
        var areaa = new google.maps.Polygon({
          paths: areaA,
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35
        });
        
        var areaB = [
          {lat: 50.648597, lng: -120.338407},
          {lat: 50.648648, lng: -120.337053},
          {lat: 50.649131, lng: -120.336328},
          {lat: 50.648712, lng: -120.335808},
          {lat: 50.648199, lng: -120.336404},
          {lat: 50.647787, lng: -120.33643},
          {lat: 50.647583, lng: -120.33731},
          {lat: 50.648603, lng: -120.3383}
        ];
        
        var areab = new google.maps.Polygon({
          paths: areaB,
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35
        });
        
    var areaC = [
          {lat: 50.648263, lng: -120.338804},
          {lat: 50.648011, lng: -120.33845},
          {lat: 50.647882, lng: -120.339233},
          {lat:  50.647508, lng: -120.339155},
          {lat:  50.647644, lng: -120.338308},
          {lat:  50.646845, lng: -120.335931},
          {lat:  50.647028, lng: -120.335486},
          {lat:  50.647321, lng: -120.336157}
        ];
        
        // Construct the polygon.
        var areac = new google.maps.Polygon({
          paths: areaC,
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35
        });
        
        var areaD = [
          {lat: 50.650063, lng: -120.33922},
          {lat:  50.650525 , lng:-120.339751},
          {lat: 50.650814, lng: -120.33951},
          {lat:  50.650835 , lng: -120.338925},
          {lat:  50.649804, lng:  -120.338201},
          {lat:  50.648814, lng:  -120.338973},
          {lat:  50.648892, lng: -120.339113},
          {lat:  50.64893, lng: -120.339526},
          {lat:  50.64927, lng: -120.339778},
          {lat:  50.649665, lng:  -120.340062}
          
        ];
        
        // Construct the polygon.
        var aread = new google.maps.Polygon({
          paths: areaD,
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35
        });
        var areaE = [
          {lat: 50.651297, lng: -120.34228},
          {lat: 50.651107  , lng:-120.344351},
          {lat: 50.64959 , lng: -120.340285},
          
          
          {lat:50.649984 , lng:-120.340081},
          {lat:50.649971, lng:-120.339459},
          {lat:50.650229, lng:-120.339544},
          {lat:50.650324, lng:-120.340188},
          {lat:50.651168, lng:-120.339834},
          {lat:50.651195, lng:-120.342323}
           
        ];
        
        // Construct the polygon.
        var areae = new google.maps.Polygon({
          paths: areaE,
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35
        });
        
        var areaF = [
          {lat: 50.652318, lng: -120.347551},
          {lat:  50.651501  , lng:-120.344525},
          {lat: 50.651491 , lng: -120.344434},
          {lat:50.651855 , lng:-120.344332},
          {lat:50.65212, lng:-120.344938},
          {lat:50.652947, lng:-120.346119}
          
        
        ];
        
        // Construct the polygon.
        var areaf = new google.maps.Polygon({
          paths: areaF,
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35
        });
          var areaG = [
          {lat: 50.651899, lng: -120.344375},
          {lat:  50.652049  , lng:-120.344225},
          {lat: 50.653249 , lng: -120.345614},
          {lat:50.653494  , lng:-120.345099},
          {lat:50.653957, lng:-120.346027},
          {lat:50.654188, lng:-120.346558},
          {lat:50.654538, lng:-120.347406},
          {lat:50.654151, lng:-120.348087},
          {lat:50.653559, lng:-120.34747},
          {lat:50.652937, lng:-120.345984},
           {lat:50.652321, lng:-120.345351},
            {lat:50.652937, lng:-120.345984}
          
        
        ];
        
        // Construct the polygon.
        var areag = new google.maps.Polygon({
          paths: areaG,
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35
        });
        
       
   

          var areaH = [
            <?php 
          if($result->num_rows>0){
          while($row=$result->fetch_assoc()){
          echo"{lat:".$row["lattitude"].","."lang:".$row["longitude"]."},";}
          
          }else { echo "0results";
          }
          $conn->close();
?>
        
        ];
        
        // Construct the polygon.
        
      
        var areah = new google.maps.Polygon({
          paths: areaH,
          strokeColor: 'red',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35,
        
          
        });
        
         
        
   
        areaa.setMap(map);
        areab.setMap(map);
        areac.setMap(map);
        aread.setMap(map);
        areae.setMap(map);
        areaf.setMap(map);
        areag.setMap(map);
        
        areah.setMap(map);
        
    

      }
      
    


</script>