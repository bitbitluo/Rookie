<?php
include("../../../connect.php");
session_start();
$username = $_SESSION['cur_user']; 
$blog = $_POST["blog"];
$title = $_POST["title"];
$sub = $_POST["sub"];


if ( !empty($_FILES['photoInput']['tmp_name']) ){

	$randName = md5(uniqid(mt_rand(), true));
  	move_uploaded_file($_FILES["photoInput"]["tmp_name"], "../../../img/blog/".$randName.".jpg");
  	$photo = "/img/blog/".$randName.".jpg"; 
} else {
	$photo = "/img/blog/blog_bg.jpg";
}

$sql = "INSERT INTO blogs (author, blog, title, love, photo, sub) 
	VALUES ('$username', '$blog', '$title', 0, '$photo', '$sub')";
$conn->query($sql) or die($conn->error);
?>