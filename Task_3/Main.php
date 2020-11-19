<?php

require('..\Task_2\read_2.php');
require('checking.php');
require('testChecking.php');

$list = [
	'dirs' => [],
	'files' => []
];

$test=$list;
testChecking($test);

echo PHP_EOL.'Введите путь к папке:'.PHP_EOL;

$path = readFromConsole();
$list = checking($path, $list);
print_r($list);