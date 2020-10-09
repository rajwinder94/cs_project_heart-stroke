<?php 
session_start();
$con = mysqli_connect('localhost', 'root', 'password', 'project');
         
        // connect to database
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        
       $sql = "SELECT * FROM telerecruiter ";
       $result = $con->query($sql);
       $snovar=1;
       $num_rows = mysqli_num_rows($result);
      $_SESSION['row']=$num_rows;
  ?>
    <?php
  if(isset($_SESSION['teleset'])){ ?> <script>alert("Record Updated");</script>
 <?php }
  ?>      
 <!DOCTYPE html>
<html> 
<head>
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
</head>
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
<div class="row"><div class="col-sm-12"><h2>Telerecruiting</h2></div></div>
<div class="row">
<div class="col-sm-12">

<table class="table table-striped">
<thead>

<tr>
<th>SNO</th>
<th>Name</th>
<th>Phone</th>
<th>Status</th>
<th>Telerecruiter Name</th>
</tr>
</thead>
<tbody>
<form action="teleyodate.php" method="post">
<?php while($row = $result->fetch_assoc()) {
$name="name".$snovar;
$phone="phone".$snovar;
$status="status".$snovar;
$tid="tid".$snovar;
$buttid="bid".$snovar;

?>
<tr>
<td><?php echo $snovar;?>
<td><input type="text" id="<?php echo $name;?>" name="<?php echo $name;?>" value="<?php echo $row["name"];?>" /></td>
<td><input type="text" id="<?php echo $phone;?>" name="<?php echo $phone;?>" value="<?php echo $row["phone"];?>" /></td>
<td><select name="<?php echo $status;?>" id="<?php echo $status;?>"><option value="<?php echo $row["status"];?>" selected><?php echo $row["status"];?></option>
						  <option value="interested">interested</option>
						  <option value="recruited">recruited</option> </select>

</td>
<td><input type="text" id="<?php echo $tid;?>" name="<?php echo $tid;?>" value="<?php echo $row["telerecruiter_id"];?>" /></td>
<td><input type="submit" id="<?php echo $buttid; ?>" name="<?php echo $buttid; ?>" value="submit"/></td>
</tr>
<?php $snovar++;
}?>

</tr>

</form>
</tbody>
</table>

</div>
</div>
</div>
</body>
</html>