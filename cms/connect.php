<?php
$dbhost = 'localhost';
$dbUser = 'root';
$dbPass ='';
$dbName = 'cms';

$conn = mysqli_connect($dbhost, $dbUser, $dbPass, $dbName);

if(!$conn){
    die("Something went wrong. Database is not connected;". mysqli_connect_error());
}else{
    // echo 'Connection Successful';
}
?>