<?php
session_start();
if(isset($_SESSION['cur_user']))
{
    unset($_SESSION['cur_user']);
}
?>
<script type="text/javascript">
	window.location.href="/";
</script>