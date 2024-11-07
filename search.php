<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "aggregator_data";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = " SELECT * FROM hoteli LIMIT 20 " ;
  $result = mysqli_query($conn, $sql);
  $hotels=[];
  while($row = $result->fetch_assoc()) {
    $hotels [] = $row;
  }
   
?>
<html>
<head>
    <style>
        .print{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="print">
    <?php 
    foreach ($hotels as $hotel) { ?>
    <div class ="listing_title">
    <a target="_blank" href="<?php echo $hotel["web_url"]; ?>" 
     id="<?php $hotel["id"];?> "   
      </a>
    <p> <?php echo $hotel["name"];
    
    } ?>
    </div>
</body>
</html>

