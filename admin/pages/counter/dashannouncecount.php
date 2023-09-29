<?php

include '../pages/dbconnect.php';

$qry = "SELECT * FROM `announce`";
$result = $conn->query($qry);

echo "<h1>".$result->num_rows."</h1>";


?>