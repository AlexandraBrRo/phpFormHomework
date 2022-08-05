<?php
$localhost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'phplogin';

$connection = mysqli_connect($localhost, $dbUser, $dbPassword, $dbName);
// check connect

if($connection === false){
   die("Error: Could not connect." . mysqli_connect_error());
} 
// else {
//    echo 'Connection successfully';
// }
// echo '<br>';

?>