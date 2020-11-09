<?php

require('read_1.php');

$array=readFromConsole();
$result=array_sum($array);
echo 'Сумма элементов: '.$result;
