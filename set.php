<?php 
	include("/connect.php");
	$email = $_POST["email"];
	$sign = $_POST["sign"];
	$avatar = $_POST["avatar"];
	session_start();
	$username = $_SESSION['cur_user'];
	if(isset($_SESSION['cur_user'])){
		// 有可能存在sql注入的问题
		$sql = "UPDATE users SET email='$email', sign='$sign', avatar='$avatar' WHERE username='$username'";
		//  $sql = "INSERT INTO blogs (author, blog) VALUES ('$username', '$blog')";
		$conn->query($sql) or die($conn->error);
		echo "修改成功";
	} else {
		echo "请先登录";
	}
 ?>