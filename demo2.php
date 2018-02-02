<?php
header('Content-Type:text/html; charset=utf-8');

class Computer{
	public $_name;
	public $_model;
	function _run(){
		echo "这是运行的方法~";
	}
};
$computer1 = new Computer();

$computer1->_name = '联想~';
$computer1->_model = 'i5~';

var_dump($computer1);
echo "<br>";
echo $computer1->_name,'<br>';
echo $computer1->_run(),'<hr>';

// setcookie('user', 'lufang', time()+3600);

// echo $_COOKIE['user'],'<hr>';
// print_r($_COOKIE);

if(isset($_COOKIE['user'])){
	echo '欢迎'.$_COOKIE['user'].'<br>';
}else{
	echo '请登录';
}