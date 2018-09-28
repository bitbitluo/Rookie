<?php 

include("../connect.php");

$sql = 'SELECT * FROM blogs WHERE title = "1" ';

$result = $conn->query($sql);

$row = $result->fetch_array(MYSQLI_ASSOC);


