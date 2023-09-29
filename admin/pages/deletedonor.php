<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'dbconnect.php';

$qry="DELETE FROM `donor` WHERE id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"<script>
    alert('Donor deleted successfully');
    window.location.href='viewdonor.php';
    </script>";
}
else{
    echo"<script>
    alert('Something went wrong');
    window.location.href='viewdonor.php';
    </script>";
}
}
