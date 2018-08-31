<?php
$WeatherSource = "https://api.forecast.io/forecast/ed72b21f6bac457ee5fe1eb2388ee4be/" . $_GET["lat"] . "," . $_GET["lng"];
header("Content-Type: application/json");
header("Cache-Control: no-cache");
readfile($WeatherSource);
?>
