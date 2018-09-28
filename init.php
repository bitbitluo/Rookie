<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
$servername = "localhost";
$username = "root";
$password = "root";

$conn = new mysqli($servername, $username, $password); 

if ($conn->connect_error) { 
    die("连接数据库失败: " . $conn->connect_error . "<br>"); 
} 
echo "成功连接数据库<br>"; 

$sql = "CREATE DATABASE rookies";

if($conn->query($sql) === TRUE) {
	echo "创建数据库rookies" . "<br>";
} else {
	die("创建数据库失败: " . $conn->error);
}

$conn->select_db("rookies");

$sql = "CREATE TABLE users(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
sign VARCHAR(30) NOT NULL
)";
$conn->query($sql) or die("创建users表失败:<br>$conn->error");
echo "创建users表<br>";



// 创建文章表
$sql = "CREATE TABLE blogs(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
author VARCHAR(30) NOT NULL,
title VARCHAR(30) NOT NULL,
photo VARCHAR(30) NOT NULL,
love INT(6) UNSIGNED,
blog TEXT NOT NULL,
edit_time VARCHAR(15) NOT NULL
)";
$conn->query($sql) or die("创建blogs表失败:<br>$conn->error");
echo "创建blogs表<br>";

$conn->close();
?>

