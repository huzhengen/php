<?php
header('Content-Type:text/html; charset=utf-8');

$array = array('green', 'blue', 'orange', 'blue');
$array = array_flip($array);
$array = array_flip($array);
$array = array_merge($array);


print_r($array);