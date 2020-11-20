<?php

function testChecking($test){
	$result=checking('test', $test);
	if (
		$result['dirs']['Freshmeat']['is_readable'] === true &&
		$result['dirs']['Freshmeat']['is_writeable'] === true)
	{
		echo 'Freshmeat - correct'.PHP_EOL;
	}
	else
	{
		echo 'Freshmeat - incorrect'.PHP_EOL;
	}
	if (
		$result['dirs']['Glina']['is_readable'] === true &&
		$result['dirs']['Glina']['is_writeable'] === true)
	{
		echo 'Glina - correct'.PHP_EOL;
	}
	else
	{
		echo 'Glina - incorrect'.PHP_EOL;
	}
	if (
		$result['files']['Лист.xlsx']['is_readable'] === true &&
		$result['files']['Лист.xlsx']['is_writeable'] === true &&
		$result['files']['Лист.xlsx']['filesize'] === 6561
	)
	{
		echo 'Mathcad Document - correct'.PHP_EOL;
	}
	else
	{
		echo 'Mathcad Document - incorrect'.PHP_EOL;
	}
	if (
		$result['files']['Рисунок.bmp']['is_readable'] === true &&
		$result['files']['Рисунок.bmp']['is_writeable'] === true &&
		$result['files']['Рисунок.bmp']['filesize'] === 4214606
	)
	{
		echo 'Новый точечный рисунок - correct'.PHP_EOL;
	}
	else
	{
		echo 'Новый точечный рисунок - incorrect'.PHP_EOL;
	}
	echo PHP_EOL;
	print_r($result);
}