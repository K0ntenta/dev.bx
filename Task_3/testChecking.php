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
		$result['files']['Mathcad Document.xmcd']['is_readable'] === true &&
		$result['files']['Mathcad Document.xmcd']['is_writeable'] === true &&
		$result['files']['Mathcad Document.xmcd']['filesize'] === 4214606
	)
	{
		echo 'Mathcad Document - correct'.PHP_EOL;
	}
	else
	{
		echo 'Mathcad Document - incorrect'.PHP_EOL;
	}
	if (
		$result['files']['Новый точечный рисунок.bmp']['is_readable'] === true &&
		$result['files']['Новый точечный рисунок.bmp']['is_writeable'] === true &&
		$result['files']['Новый точечный рисунок.bmp']['filesize'] === 4214606
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