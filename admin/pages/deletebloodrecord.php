<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'dbconnect.php';

$qry="delete from blood where id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"<script>
    alert('Data deleted successfully');
    window.location.href='viewblood.php';
    </script>";
}
else{
    echo"<script>
    alert('Something went wrong');
    window.location.href='viewblood.php';
    </script>";
}
}
