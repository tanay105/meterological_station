<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

<title>Meterological Station</title>
</head>

<body>
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
	<header>
    	<i class="fa fa-bar-chart" aria-hidden="true" fa-3x></i>
        METEROLOGICAL STATION
    </header>
<div class="mainDiv">
    	<div class="temp">
        <img src="images/temperature.png" width="100" height="100" /><br />
        Temperature<br />
        <?php echo $temperature; ?>
    	</div>
        <div class="precip">
        <img src="images/precip.png" width="100" height="100" /><br />
        Precipitation
        <br />
        <?php echo $precipitation; ?>
        
        </div>
   
        <div class="light">
        <img src="images/light.png" height="100" width="100" /><br />
        Ambient Light
        <br />
        <?php echo $light; ?>
        
        </div>
  		<div class="humidity">
  		<img src="images/humidity.png" height="100" width="100" /><br />
        Humidity
        <br />
        <?php echo $humidity; ?>	
        
        </div>
        
  
</div>
<div class="mainDiv2">
<p>Meteorological station is a real time IOT based system which allows real time control of meteorological data like wind speed and direction it also measures temperature, relative humidity, atmospheric pressure and precipitation rate. In this way the data captured by the system can be stored for further studies and decision making. This data can be fetched on remote device from the online server using Internet.
</p><br />
<img src="images/sunny-to-partly-cloudy-symbol-icon-63307.png" height="170" width="200" id="footer" /><vr/>
<img src="images/raspberry-pi.png" height="170" width="200" id="footer"/>
<img src="images/358751-200.png" height="170" width="200" id="footer" />


</div>
</body>
</html>
