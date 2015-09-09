<?php

echo
$contents=file_get_contents("http://www.weather-forecast.com/locations/San-Francisco/forecasts/latest");

preg_match("/3 Day Weather Forecast Summary:/i", $contents, $matches);

print_r($matches);

?>