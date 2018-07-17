<html>
<head><title>Weather Finder</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body style="background:#34acdf;">




<?php
error_reporting(0);
$get = json_decode(file_get_contents('http://ip-api.com/json/'),true);
date_default_timezone_set($get['timezone']);
$city = $_GET['q'];
 $string = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=3d81f09b99642e2b682da8c82ed704f6";
 $data = json_decode(file_get_contents($string),true);
 
 $temp = $data['main']['temp'];
 
 $icon = $data['weather'][0]['icon'];
 $visibility = $data['visibility'];
 $visibilitykm = $visibility / 1000;
 $country =  "<h1><b>".$data['name'].",".$data['sys']['country']."</h1></b>";
 
 $logo = "<center><img src='http://openweathermap.org/img/w/".$icon.".png'></center>";
 $desc = "<b><p>".$data['weather'][0]['description']."</p></b>";
 
 $temperature =  "<b> ".$temp."°C</b><br>";
 $clouds = "<b> ".$data['clouds']['all']."%</b><br>";
 $humidity = "<b> ".$data['main']['humidity']."%</b><br>";
 $windspeed = "<b> ".$data['wind']['speed']."m/s</b><br>";
 $pressure = "<b> ".$data['main']['pressure']."hpa</b><br>";
 $visibility =  "<b> ".$visibilitykm."Km</b><br>";
 date_default_timezone_set("asia/dhaka");
 $sunrise = "<b> ".date('h:i:sa', $data['sys']['sunrise'])."</b><br>";
 $sunset = "<b> ".date('h:i:sa', $data['sys']['sunset'])."</b>";
 
 
?>

<div class="container bg">
<div class="header clearfix">
  <nav style=" margin-top:20px;  padding:5px;">
    <ul class="nav nav-pills pull-right" >
      <li role="presentation" ><a href="index.php" style="color:black;">Home</a></li>
      <li role="presentation"><a href="about.php" style="color:black;">About</a></li>
      <li role="presentation"><a href="http://openweathermap.org/help/city_list.txt" style="color:black;">Check City List</a></li>
    </ul>
  </nav>

  <center><h1 class="text-muted" style="font-family:cursive;color:white; ">Weather Finder</h1></center><br><br>
  <center><h2>Weather Details Of <?php echo $country;?></h2></center>
  <center> <?php
          echo "Today is " . date("d/m/Y") . "<br>";
          echo "" . date("l")."<br>";
          date_default_timezone_set("asia/dhaka");
          echo "Now the time is  " . date("h:i:sa")."  (Bangladesh standad time).<br><br>";
?> </center>
  <table class="table table-bordered">
     <tr>
         <td>Temperature:</td>
         <td><?php echo $temperature;?></td>
      </tr>
      <tr>
        <td>Description:</td>
        <td><?php echo $desc;?><?php echo $logo;?></td> 
      </tr>

     <tr>
        <td>Cloud:</td>
        <td><?php echo $clouds;?></td> 
      </tr>
     <tr>
     <td>Humidity:</td> 
     <td><?php echo $humidity;?></td>
      </tr>
     <tr>
     <td>Wind Speed:</td>
     <td><?php echo $windspeed;?></td>
      </tr>
     <tr>
     <td>Pressure:</td>
     <td><?php echo $pressure;?></td>
      </tr>
     <tr>
     <td>Visibility:</td>
     <td><?php echo $visibility;?></td>
      </tr>
     <tr>
     <td>Sunrise:</td> 
     <td><?php echo $sunrise;?></td>
      </tr>
     <tr>
     <td>Sunset:</td> 
     <td><?php echo $sunset;?></td>
      </tr>
 </table>  
</div>
<footer class="footer" style="color:white">
<br><br><center><p>Weather Finder &copy; 2018 Created by Shahzad.</p></center><br><br>
</footer>
</body>
</html>