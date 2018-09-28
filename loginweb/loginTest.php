<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
session_start();
if(!isset($_SESSION['cur_user']))
	echo '
		<script type="text/javascript">
			alert("请先登录");
			window.location.href="./"
		</script>
		';	
?>

