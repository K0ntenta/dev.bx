<?php

require('read_2.php');
require('testing.php');
require('find.php');

testing();

echo 'Введите числа через Enter и наберите stop'.PHP_EOL;
$array = [];
while (($input = readFromConsole()) !== 'stop')
{
	array_push($array, $input);
}
if ($array===[])
{
	echo 'Нет чисел';
	return 0;
}
find($array);
echo 'Количество элементов, равных максимальному в массиве: '.find($array);
