<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];

include 'dbconnect.php';

$qry="DELETE FROM `campaigndb` WHERE id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"<script>
    alert('campaign Deleted successfully');
    window.location.href='viewcampaign.php';
    </script>";
}
else{
    echo"<script>
    alert('Something went wrong');
    window.location.href='viewcampaign.php';
    </script>";
}
}
