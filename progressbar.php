
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>





<?php 
$connection = mysqli_connect('localhost', 'root', 'password', 'project');
        
    
    
$query = "Use Hospital;";
$connection->query($query);
    
// Using SUM Function

$query = "SELECT SUM(revenue_gen) ".
"FROM volunteer ";
$output = $connection->query($query);

if ($output->num_rows > 0) {
    // output data of each row
    while($row = $output->fetch_assoc()) {
       $value= $row["SUM(revenue_gen)"];

    }
    $target=60000;  
    $diff=($value/$target)*100;
    
    echo $diff;
} else {
    echo "0 results";
}

?>

<div class="container">
  <h2>Animated Progress Bar</h2>
  <p>The .active class animates the progress bar:</p> 
  <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $diff?>%">
      <?php  echo $diff; ?>
  </div>
</div>

 </body>
</html>
<?php
$conn->close();

 ?>
 