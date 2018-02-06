<?php
@$phoneNum = $_POST['phone'];

$con = mysqli_connect('localhost', 'root', 'root');
if(!$con){
	die('连接失败：' . mysqli_error($con));
}
mysqli_select_db($con, 'php');
$phone = "select phone from demo6 where phone = $phoneNum";
$result = mysqli_query($con, $phone);
if(!$result){
	// print_r('Error: %s\n', mysqli_error($con));
	echo mysqli_error($con);
	exit();
}
$rows = mysqli_num_rows($result);
if($rows){
	echo "手机号已经注册了";
	exit;
}else{
	echo "手机号可用";
}
mysqli_close($con);