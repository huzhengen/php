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

	if(mysql_query("CREATE DATABASE php", $conn)){
		echo "数据库创建成功<br>";
	}else{
		echo "数据库创建失败：" . mysql_error();
	}



	$sql = "CREATE TABLE php_tbl(".
	"php_id INT NOT NULL AUTO_INCREMENT, ".
	"php_title VARCHAR(100) NOT NULL, ".
	"php_author VARCHAR(40) NOT NULL, ".
	"submission_date DATE, ".
	"PRIMARY KEY (php_id)".
	");";

	mysql_select_db("php");

	$retval = mysql_query($sql, $conn);
	if(!$retval){
		die("table创建失败：" . mysql_error());
	}
	echo "table创建成功<br>";

	





	mysql_close($conn);

 ?>
</body>
</html>