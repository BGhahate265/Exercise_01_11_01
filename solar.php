<?php
$WeatherSource = "https://api.forecast.io/forecast/eb717469250d2fa34cbe0b0d44e3f4d2/" . $_GET["lat"] . "," . $_GET["lng"];
header("Content-Type: application/json");
header("Cache-Control: no-cache");
readfile($WeatherSource);
?>
