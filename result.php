<?php

$ville = $_POST['ville'];
$request = 'http://api.openweathermap.org/data/2.5/weather?q='.$ville.'&APPID=2093ff5449c0cd4294aadbf8c0355fdd';
$response  = file_get_contents($request);
$tab  = json_decode($response, true);

echo ($tab['weather'][0]['main']);

$temps= $tab['weather'][0]['main'];
$deezer= file_get_contents("https://api.deezer.com/search?q=".$temps);
$vard = json_decode($deezer,true);

echo "<iframe src='" . $vard['data'][0]['preview'] . "'></iframe>";


?>