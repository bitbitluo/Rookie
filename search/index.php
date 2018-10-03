<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
	
	include("../connect.php");

	$keyword = $_GET['keyword'];

	if($keyword==""){
		die("<h1>请输入一个以上的关键字</h1>"."<a href=\" / \">返回</a>");
	}

	$sql = "SELECT * FROM blogs WHERE blog LIKE '%$keyword%' or title LIKE '%$keyword%'";
	$result = $conn->query($sql);
	$count = 0;
	while ($row = ($result->fetch_assoc()) ) {
		$count += 1;
		$title = $row['title'];
		$sub = $row['sub'];
		$id = $row['id'];
		echo "<div>";
		echo "<h3>".$title."</h3>";
		echo "<p>".$sub." ...</p>";
		echo "<a href=\"/blog/?page=$id\">查看原文</a>";
		echo "</div>";
	}
	if(!$count){
		die("<h1>没有找到你想要的结果</h1>"."<a href=\" / \">返回</a>");	
	}
	//->fetch_assoc();

 ?>