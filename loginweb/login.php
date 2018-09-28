<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php 
include("../connect.php");
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select username, password from users where username = '$username' and password='$password' ";
$result = $conn->query($sql);
if($result->num_rows > 0){
	session_start();
	$_SESSION['cur_user']=$username;
	echo "登录成功";
} else {
	echo "登录失败";
}