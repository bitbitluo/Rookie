<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php
session_start();
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);


$extension = end($temp);     
if ( 1 ){
    if ($_FILES["file"]["error"] > 0)
        echo "错误：: " . $_FILES["file"]["error"] . "<br>";
    else
        move_uploaded_file($_FILES["file"]["tmp_name"], "../img/avatar/".$_SESSION['cur_user'].".jpg");
} else {
    echo "非法的文件格式";
}
?> 

-