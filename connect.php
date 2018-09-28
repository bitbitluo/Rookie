<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "rookies";

$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
    die("连接数据库失败: " . $conn->connect_error . "<br>"); 
} 
?>