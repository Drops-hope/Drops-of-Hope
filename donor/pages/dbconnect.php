<?php

$servername="localhost:3310";
$uname="root";
$pass="";
$db="BBMS_db";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed..");
}

?>