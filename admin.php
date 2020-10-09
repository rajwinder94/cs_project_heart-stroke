<?php
session_start();
$connection = mysqli_connect('localhost', 'root', 'password', 'project');

$query = "Use Hospital;";
$connection->query($query);

// Using SUM Function

$query = "SELECT SUM(revenue_gen) FROM revenue";

$output = $connection->query($query);
if ($output->num_rows > 0) {
    // output data of each row
    while($row = $output->fetch_assoc()) {
       $value= $row["SUM(revenue_gen)"];
    }
    $target=6000000;
    $diff=round(($value/$target)*100,2);



} else {
    echo "0 results";
}
?>
<?php
$con = mysqli_connect('localhost', 'root', 'password', 'project');

$sql = "SELECT * FROM revenue";
    $result = $con->query($sql);

?>


<!DOCTYPE html>
<html>
<head>

<title>Admin Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<style>
#container {
min-width: 310px;
max-width: 1000px;
height: 400px;
margin: 0 auto
}
 .margin {margin-bottom: 45px;}
 #hov{font-size: 20px;}
 #hov:hover {color:red;}

 p, span, ul, li, button {
  font-family: inherit;
  font-size: inherit;
  font-weight: inherit;
  line-height: inherit;
}
a{
color:white;
text-decoration:none;
}
a:hover{
color:white;
text-decoration:none;
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



</style>
<body>
<div class="container-fluid"> <!-- main container start  -->
<div class="row"> <!-- start nav row-->
<nav class="col-lg-12 navbar  navbar-default navbar-fixed" style="background-color:white">
          		<div class="row">
          		<div class="col-lg-12">
          		</div>
          		</div>
              <div class="row">
              <div class="col-lg-3">
              <img src="images/logo.jpg" style="margin-left:20%;" />
              </div>
           <div class="col-lg-2">
    <div class="collapse navbar-collapse" id="myNavbar" style="margin:2%">

      <ul class="nav navbar-nav navbar-left">
        <li><a  href="logout.php"><span class="glyphicon glyphicon-log-out"></span>logout</a></li>
        <li><a  href="addrevenue.php"><span class="glyphicon glyphicon-plus-sign"></span>Add revenue</a></li>

      </ul>

    </div>
    </div>
    <div class="col-lg-6">

    </div>
    <div style="margin-top:1%;margin-left:8%" class="col-lg-6">
    <h5 class="title" style="float: left;margin-top:0%"><span class="glyphicon glyphicon-usd"></span>raised this year:&nbsp;</h2> <p style="float: right;">Goal:<?php echo "$".$target?></p><div  class="progress">
   <div  class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="60" style="width:<?php echo $diff?>%">
      <?php  echo "$".$value; ?>
  </div>
</div>
</div>

    </div>
    </div>
  </div>
  </div>


  			 </nav>
  		</div>

<div class="container" style="margin-left:5%">

  <div class="row">
    <div class="col-md-12">
      <h1><strong>Welcome <?php echo  $_SESSION['login_user']; ?>!</strong></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <div class="tile purple">
       <h3 class="title"><span class="glyphicon glyphicon-map-marker"></span>&nbsp;<a href="maptestfinal.php">Mapping</a></h3>

      </div>
    </div>
    <div class="col-sm-4">
      <div class="tile red">
        <h3 class="title"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp; <a href="updatesuccess.php">Volunteer</a></h3>

      </div>
    </div>
    <div class="col-sm-4">
      <div class="tile orange">
       <h3 class="title"><span class="glyphicon glyphicon-bookmark"></span>&nbsp; <a href="kittrack.php">Kit Tracker</a></h3>

      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <div class="tile green">
        <h3 class="title"><span class="glyphicon glyphicon-edit"></span>&nbsp;<a href="telerecrute.php">Change Status</a></h3>

      </div>
    </div>
    <div class="col-sm-4">
      <div class="tile blue">
        <h3 class="title"><span class="glyphicon glyphicon-file"></span>&nbsp;<a href="report.php">Pull Reports</a></h3>

      </div>
    </div>
  </div>
   <div class="row">
    <div class="col-sm-12">

    </div>
   </div>
  <div class="row">
    <div class="col-sm-12">
    <div id="container"></div>
  </div>
  </div>
</div>
</div> <!-- main container ends  -->


</div>
</body>
</html>
<script>
Highcharts.chart('container', {

   title: {
       text: 'Revenue raised since 2015'
   },

   subtitle: {
       text: 'Source: Heart and Stroke Foundation'
   },

   yAxis: {
       title: {
           text: 'Revenue Raised'
       }
   },
   legend: {
       layout: 'vertical',
       align: 'right',
       verticalAlign: 'middle'
   },

   plotOptions: {
       series: {
           pointStart: 2007
       }
   },

   series: [{
       name: 'Funds raised',
       data:[<?php while($row = $result->fetch_assoc()) {
  echo $row["revenue_gen"].",";
      }?>]
   }]

});
</script>
