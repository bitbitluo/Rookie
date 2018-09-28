<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php 
include("../connect.php");
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select username from users where username = '$username' limit 1" ;

$result = $conn->query($sql) or die($conn->error);    
if($result->num_rows > 0){
	die("用户名已经存在");
}

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
$conn->query($sql) or die($conn->error);
echo "<p>". "创建帐号成功" . "<p>";



/*
$username = "8";
$password = "9";

$sql = "select username from user where username = '$username' limit 1" ; //SQL语句  
$result = $conn->query($sql);    //执行SQL语句  
echo $result->num_rows;
if($result->num_rows > 0){
	die("用户名已经存在");
}



$sql = "INSERT INTO user (username, password) VALUES ($username, $password)";
$conn->query($sql);
echo $conn->error;
/*

$sql = "INSERT INTO user (username, password) 
VALUES ('999', '999')";


$check_query = mysql_query("select uid from user where username='999' limit 1");

if(mysql_fetch_array($check_query)){
    die("用户名已经存在"); 
}

if ($conn->query($sql) === TRUE) { 
    echo "New record created successfully"; 
} else { 
    echo "Error: " . $sql . "<br>" . $conn->error; 
} 
*/
$conn->close(); 
?>