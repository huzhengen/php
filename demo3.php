<?php
header('Content-Type:text/html; charset=utf-8');
date_default_timezone_set('PRC');

$arr = array('a'=>1, 'b'=>2, 'c'=>3, 'd'=>4);
// echo json_encode($arr);

class Emp{
	public $name = '';
	public $hobbies = '';
	public $birthdate = '';
}

$e = new Emp();
$e->name = 'sarry';
$e->hobbies = 'esports';
// $e->birthdate = date('m/d/Y h:i:s a', '8/3/1999 12:33:44 p');
// $e->birthdate = date('m/d/Y h:i:s a', strtotime('8/3/1999 12:33:44'));
echo json_encode($e);