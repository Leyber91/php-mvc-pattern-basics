<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "Spacex91";
$dBName = "employees";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("connection failed: ". mysqli_connect_error());
}
else if ($conn){
    echo 'hola';
}

