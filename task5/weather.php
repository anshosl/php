<?php
// $url = "https://api.openweathermap.org/data/2.5/weather?lat=23.259933&lon=77.412613&appid=801b89366c7a494faa22b8a120b9ceb8";
$city = $_POST['city'];
$url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=801b89366c7a494faa22b8a120b9ceb8";
$ch = curl_init(); //initialized curl
curl_setopt($ch,CURLOPT_URL,$url);  //setting up curl parameter
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); //so that our data will not shown in output
$result = curl_exec($ch); // to execute 
curl_close($ch); 
$result = json_decode($result,true); // so that are data will convert into array

echo '<pre>';
// print_r($result);
 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="detail">
        <h1>YOUR CURRENT WEATHER DETAILS:</h1>
    </div>
    <div class="weather">
        <h1>WEATHER: <?php echo($result['weather'][0]['main'])?></h1> 
    </div>
    <div class="temp">
        <h1>TEMPERATURE: <?php echo round($result['main']['temp']-273.15)?>&deg;C</h1> 
    </div>
    <div class="rise">
        <h1>Sunrise: <?php echo date('H:i:sa',$result['sys']['sunrise'])?></h1>
    </div>
    <div class="set">
        <h1>SUNSET: <?php echo date('H:i:sa',$result['sys']['sunset'])?></h1>
    </div>
</div>
</body>
</html>