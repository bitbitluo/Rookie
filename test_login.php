<?php
    session_start();
   if(!isset($_SESSION['cur_user']))
   		echo'
   			<script type="text/javascript">
 				window.location.href="/not_login.html";
 			</script>
   		';
 ?>

