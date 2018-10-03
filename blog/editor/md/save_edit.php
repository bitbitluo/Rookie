<?php
session_start();
include("../../../connect.php");
if(!isset($_SESSION['cur_user']))
	die("请先登录")	
else{
	$username = $_SESSION['cur_user']; 
	$blog = $_POST["blog"];
	$title = $_POST["title"];



	$file = request()->file('file');
	$info = $file->move("1212");


	$t = time();
	$sql = "INSERT INTO blogs (author, blog, title, love, edit_time) VALUES ('$username', '$blog', '$title', 0, $t)";
	$conn->query($sql) or die($conn->error);
}	

?>
