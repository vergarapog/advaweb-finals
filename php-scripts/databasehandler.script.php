<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "advaweb-finals-ecommerce";


$connection = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$connection){
  die("Connection failed: ".mysqli_connect_error());
}
