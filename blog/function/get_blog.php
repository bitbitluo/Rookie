<?php 

include("../connect.php");

$page = $_GET["page"];

$sql = "SELECT * FROM blogs WHERE id = '$page' ";

$result = $conn->query($sql)->fetch_assoc();

$author = $result['author']; 

$sql = "SELECT * FROM users WHERE username = '$author' ";

$user = $conn->query($sql)->fetch_assoc();



?>


