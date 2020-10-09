<!DOCTYPE html>
<html> 
<head>
		
<title>Home Page</title>
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


</head>
<body>
	<div class="container-fluid" style="background-color:#2E2E2E"> <!-- main container start  -->
		
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
        <li><a  href="adminlogin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
        <li><a  href="#"><span class="glyphicon glyphicon-stats"></span>Graph</a></li>
      </ul>
    </div>
    </div>
    </div>
  </div>
  			 </nav> 
    </div><!-- end nav row-->

         <div class="row ">  <!-- row of carousel -->
         <div class="col-lg-12 ">
         
         <br>

              <div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel" style="height:70%">
    <!-- Indicators -->
                <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" height="300" style="width:100%;">
      <div class="item active">
        <img src="images/car1.jpg" alt="Chania" height="300" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/car2.jpg" alt="Chania" height="300" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/car3.jpg" alt="Flower" height="300" style="width:100%;">
      </div>

      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  


  </div>
         </div> <!-- end row carousel-->
    <div class="container" style="background-color:#d50000"> <!--nested container for content-->
  			 
  			 <div class="row bg-success">
  			 <div class="col-lg-12" style="background-color:#d50000">
<strong><h1 style="color:white">Make a difference in your community</h1></strong>
<h2  class="lead" style="color:white">When you join the Heart&Stroke Canvass, you do so much more than ask for donations. Every dollar you raise, every person you reach, and every heart you inspire helps save lives and support families in your own community, and across Canada.</h2>
  			 
    </div>
  			 </div>
         <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="#pane1" data-toggle="collapse">
          <img src="images/pane1.jpg" alt="Lights" style="width:100%"></a>
          <p>Lorem ipsum donec id elit</p>
          <div class="caption">
            <p id="pane1" class="collapse">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="#pane2" data-toggle="collapse">
          <img src="images/panel2.jpg" alt="Nature" style="width:100%"></a>
          <p>Lorem ipsum donec id elit</p>
          <div class="caption">
            <p id="pane2" class="collapse">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="#pane3" data-toggle="collapse">
          <img src="images/pane3.jpg" alt="Fjords" style="width:100%"></a>
          <p>Lorem ipsum donec id elit</p>
          <div class="caption">
            <p id="pane3" class="collapse">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
       
      </div>
    </div>
  </div>
  			 </div>
    </div>

  </div> <!-- end of main comtainer -->
		
	<footer class="container-fluid text-center" style="background-color:white">
   <img src="images/footer.jpg" />
</footer>








		

</body>
</html>