<?php
$servername = "fdb3.biz.nf";
$username = "2210376_iot";
$password = "rishabh123";
// Create connection
$con = mysqli_connect($servername, $username, $password);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_error());
} 
mysqli_select_db($con,"2210376_iot");
$sql = "SELECT * FROM main_data where rounum=1";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) 
{
	while($row = mysqli_fetch_assoc($result)) {
     $temperature = $row["temperature"];
	 $humidity = $row[""];
	 $light = $row[""];
	 $precipitation = $row["precipitation"];
	 
  }
} 
?>