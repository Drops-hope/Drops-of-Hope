<?php

include '../pages/dbconnect.php';

$qry = "SELECT * FROM `donor` ";
$result = $conn->query($qry);

echo "<h1>".$result->num_rows."</h1>";


?>