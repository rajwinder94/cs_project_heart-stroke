
<?php 
session_start();
$con = mysqli_connect('localhost', 'root', 'password', 'project');
         
        // connect to database
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
         
       
     ?>
     



<!DOCTYPE>
 
<html>
    <head>
     
    <title></title>
     
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAbJ-IytSMN8LvU_8ZYdmHydxMClrrj9lU"></script>
     
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
     
    <script type="text/javascript" src="polygon.min.js"></script>
     
    <script type="text/javascript">
	
	var name1="";
	var name2= new Array();
	var infowindow = new google.maps.InfoWindow({
  size: new google.maps.Size(150, 50)
});
   $(function drawmap1()
   {
	
		  <?php
		  
		  
		  if(isset($_POST['btn1']))
		  {
			  if($_POST['volnm']!= 'none' && $_POST['leanm']!= 'none')
			  {
			  $varvoln= $_POST['volnm'];
			   $varlead= $_POST['leanm'];
		      
			  
			  $sql1="Select c.area,first_name,last_name,cap_fname,cap_lname,lattitude,longitude from volunteer a left join routes b on (a.canvasser_ID= b.canvasser_ID) left join area c on ( b.area= c.area) where a.canvasser_ID = $varvoln and cap_fname='$varlead' order by c.area,points";
			  
			  }
			  else if( $_POST['leanm']!= 'none')
			  {
				 
			   $varlead= $_POST['leanm'];
		      
			  
			   $sql1="Select c.area,first_name,last_name,cap_fname,cap_lname,lattitude,longitude from volunteer a left join routes b on (a.canvasser_ID= b.canvasser_ID) left join area c on ( b.area= c.area) where  cap_fname='$varlead' order by c.area,points";
				  
			  }
			  
			  
			  
        		$result = mysqli_query($con,$sql1);
                 
       			$data   = false;
         
        		while($row = mysqli_fetch_array($result))
        		{
            			$data[] = $row;
        		}
         
			?>
        			var singapoerCenter=new google.maps.LatLng(50.65000, -120.340000);
         					var myOptions = {
            								zoom: 15,
            								center: singapoerCenter,
            								mapTypeId: google.maps.MapTypeId.ROADMAP
         									}
          
         					map = new google.maps.Map(document.getElementById('main-map'), myOptions);
					var coordsarr= new google.maps.MVCArray();
	
			<?php
						foreach($data as $arr)
						{
			?>
						name1=" <?php echo $arr['first_name']. " ". $arr['last_name'] ?> ";
	 					coordsarr.push( new google.maps.LatLng( <?php echo $arr['lattitude'] ?> , <?php echo $arr['longitude'] ?>));
	 		<?php
						}
			?>
		
						var polyoption= { path:coordsarr, strokeColor:"#ff0000", fillColor:"#00ff00"};
						var polygon = new google.maps.Polygon(polyoption);
							polygon.setMap(map);
						//google.maps.event.addListener(polygon, "mouseover", function(alert("hello"));
						google.maps.event.addListener(polygon, "mousemove", function(event) 
															{
    															var contentString = "name:" + name1 + "<br>" + event.latLng.toUrlValue(6);
    																infowindow.setContent(contentString);
    																infowindow.setPosition(event.latLng);
    																infowindow.open(map);
															 });
			<?php
			
		  	}
		  	else
		  	{
				
				
		  
		   			$sql1="Select * from area order by area,points";
			 // $sql1="Select c.area,first_name,last_name,cap_fname,cap_lname,lattitude,longitude,c.points from volunteer a left join routes b on (a.canvasser_ID= b.canvasser_ID) left join area c on ( b.area= c.area) order by area,points";
        			$result = mysqli_query($con,$sql1);
                 
        			$data   = false;
					$data1= false;
		
         
        			while($row = mysqli_fetch_array($result))
        			{
           					 $data[] = $row;
							$data1[]=$row;
			
        			}
         
			?>
		
		
		
						 var singapoerCenter=new google.maps.LatLng(50.65000, -120.340000);
         						var myOptions = {
            									zoom: 15,
           										center: singapoerCenter,
									            mapTypeId: google.maps.MapTypeId.ROADMAP
										         }
	          
    				    map = new google.maps.Map(document.getElementById('main-map'), myOptions);
						//var coordsarr[] = new Array();
						
	
						
	
			<?php
						$xx=0;
						foreach($data as $arr)
						{
							
							//echo "area===> ".$arr['area'] . "points==> ". $arr['points'];
							
							
							
								if($arr['points']==1)
								{
								$xx++;
								
			?>
						var coordsarr<?php echo $xx ?>= new google.maps.MVCArray();
						name2[<?php echo $xx ?>]= 	" <?php echo $arr['area']?> ";	
								
			<?php					
								
								
								}
			?>
	 					coordsarr<?php echo $xx ?>.push( new google.maps.LatLng( <?php echo $arr['lattitude'] ?> , <?php echo $arr['longitude'] ?>));
	 		<?php
						}
			
			for( $z=1 ; $z<=$xx  ; $z++)
					{
			
			?>
					
						
						var polyoption= { path:coordsarr<?php echo $z ?>, strokeColor:"#ff0000", fillColor:"#00ff00"};
						var polygon<?php echo $z ?> = new google.maps.Polygon(polyoption);
						polygon<?php echo $z ?>.setMap(map);
					
					google.maps.event.addListener(polygon<?php echo $z ?>, "mousemove", function(event) {
    //alert("hello")
	
	
	var contentString = "Area name:" + name2[<?php echo $z ?>] + "<br>" + event.latLng.toUrlValue(6);
    infowindow.setContent(contentString);
    infowindow.setPosition(event.latLng);
    infowindow.open(map);
	
	
  });
			<?php
			}
		  	
		  }
		  ?>
		  
	
		
		
		
		
		 
	});
	
	
	
	function showtext(str)
	{
		alert(str);
	}
	
	</script>
    
</head>

<body>

	<?php 

		$con = mysqli_connect('localhost', 'root', 'password', 'project');
         
        // connect to database
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
         
       
     ?>


<form name="f1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">


<select name="volnm" >

<option value="none" >  Select Volunteer </option>



 <?php
		  
		      
        $result = mysqli_query($con,"SELECT * FROM volunteer");
		
                 
        $data   = false;
         
        while($row = mysqli_fetch_array($result))
        {
        		echo "<option value='".$row['canvasser_ID']."' > ". $row['first_name'] ." ".$row['last_name'] ." </option>";
        }
         
        // close connection
       // mysqli_close($con);     
         
        
?>

</select>

<select name="leanm" >

<option value="none" >  Select Leader </option>



 <?php
		  
		      
        $result = mysqli_query($con,"SELECT distinct cap_fname, cap_lname FROM volunteer");
		
                 
        $data   = false;
         
        while($row = mysqli_fetch_array($result))
        {
        		echo "<option value='".$row['cap_fname']."' > ". $row['cap_fname'] ." ".$row['cap_lname'] ." </option>";
        }
         
        // close connection
      //  mysqli_close($con);     
         
        
?>

</select>





<input type ="Submit"  name="btn1" id="btnshow" value="SHOW"  />
</form>




<div style="margin:auto;  width: 800px; ">
     
        <div id="main-map" style="height: 600px;"></div>
     
        
     
    </div>


</body>
</html>

