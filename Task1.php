<?php

require("./Reading.php");

$array=readFromConsole();
$result=array_sum($array);
echo 'Сумма элементов: '.$result;
