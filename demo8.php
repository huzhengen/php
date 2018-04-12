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

	$sql1 = "INSERT INTO php_tbl (php_id,php_title,php_author) VALUES (1, 'study', 'Jim')";
	if(mysql_query($sql1, $conn)){
		echo "插入数据成功";
	}else{
		echo "插入数据失败：" . mysql_error();
	}


	mysql_close($conn);





 ?>
</body>
</html>