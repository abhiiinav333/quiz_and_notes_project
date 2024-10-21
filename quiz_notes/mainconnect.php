<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "quiz";

$cont=mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if(!$cont){
    die("Oops We are DEAD. Please try again after sometime!!");
}
?>