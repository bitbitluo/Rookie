<?php
session_start();
include("../../../connect.php");
if(!isset($_SESSION['cur_user']))
	echo '
		<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript">
			alert("请先登录");
			window.location.href="./"
		</script>
		';
else{
	$username = $_SESSION['cur_user']; 
	$blog = $_POST["blog"];
	$sql = "INSERT INTO blogs (author, blog) VALUES ('$username', '$blog')";
	$conn->query($sql) or die($conn->error);
	echo "文章已经发布";
}	

?>
