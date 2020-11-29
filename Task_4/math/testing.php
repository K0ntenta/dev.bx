<?php

function testing(){
	$test1 = [1, 7, 9];
	$answer1 = find($test1);
	if ($answer1 === 1)
	{
		echo 'Test 1:'.PHP_EOL.'Ввод: 1 7 9'.PHP_EOL.'Вывод: 1 - верный'.PHP_EOL.PHP_EOL;
	}
	else
	{
		echo 'Test 1:'.PHP_EOL.'Ввод: 1 7 9'.PHP_EOL.'Вывод: 1 - неверный'.PHP_EOL.PHP_EOL;
	}

	$test2 = [1, 3, 3, 1];
	$answer2 = find($test2);
	if ($answer2 === 2)
	{
		echo 'Test 2:'.PHP_EOL.'Ввод: 1 3 3 1'.PHP_EOL.'Вывод: 2 - верный'.PHP_EOL.PHP_EOL;
	}
	else
	{
		echo 'Test 2:'.PHP_EOL.'Ввод: 1 3 3 1'.PHP_EOL.'Вывод: 2 - неверный'.PHP_EOL.PHP_EOL;
	}
}