<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>
<?php 

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "root";
	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	if(!$conn){
		die("连接数据库失败：" . mysql_error());
	}
	echo "连接成功<br>";

	mysql_select_db("php");

	mysql_set_charset("utf8");

	$sql = "SELECT * FROM php_tbl";
	$info = mysql_query($sql);

	while($row = mysql_fetch_array($info)){
		echo "<pre>";
		print_r($row);
		echo "<pre>";
	}








 ?>
</body>
</html>