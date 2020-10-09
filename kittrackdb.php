
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

$kit_id = mysqli_real_escape_string($conn, $_REQUEST['value']);

 
$sql = "SELECT kit_tracker.canvasser_id,volunteer.phone,volunteer.address,kit_tracker.kit_id,kit_tracker status FROM volunteer left join kit_tracker ON volunteer.canvasser_ID= kit_tracker.canvasser_id WHERE kit_tracker.kit_id='$kit_id'";
       
       $result = $conn->query($sql);
       while($row = $result->fetch_assoc()) { ?>
       
       
       
    <div class="form-group">
    <label class="control-label col-sm-2" for="rgen">Kit Id</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="kitid" name="kitid" value='<?php echo $row["kit_id"];?>'></br>
    </div>
    
   
   
   
   <?php     
    }
} else {
    echo "0 results";
}

$conn->close();
?>