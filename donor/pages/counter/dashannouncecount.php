<?php
$servername="localhost:3310";
$uname="root";
$pass="";
$db="BBMS_db";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

$sql= "SELECT * FROM `announce`";
$query=$conn->query($sql);

echo"<h1>".$query->num_rows."</h1>";
?>