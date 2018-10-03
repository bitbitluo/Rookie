<?php 

include("../connect.php");

if(!isset($_SESSION['cur_user'])){
	die("请先登录");
} else {

	$cur_user = $_SESSION['cur_user'];
	$sql = "SELECT * FROM users WHERE username = '$cur_user' ";
	$user = $conn->query($sql)->fetch_assoc();

	$sql = "SELECT * FROM blogs WHERE author = '$cur_user' ";
	$myblogs = $conn->query($sql);

}

?>