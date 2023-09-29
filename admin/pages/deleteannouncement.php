<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];

include 'dbconnect.php';

$qry="DELETE FROM `announce` WHERE id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"<script>
    alert('announcement Deleted successfully');
    window.location.href='viewannouncement.php';
    </script>";
}
else{
    echo"<script>
    alert('Something went wrong');
    window.location.href='viewannouncement.php';
    </script>";
}
}
