<?php

require_once('read_1.php');

$array=readFromConsole();
$result=array_sum($array);
echo 'Сумма элементов: '.$result;
