<?php

//require_once 'chessClasses.php';
function testing()
{
	echo PHP_EOL. '#Ладья#' .PHP_EOL.PHP_EOL;
	$rook = new Rook(2, 2);

	echo 'Test Horizontal' .PHP_EOL;
	echo 'Начальная позиция: (2, 2)' .PHP_EOL;
	echo 'Конечная позиция: (6, 2)?' .PHP_EOL;
	echo 'Ожидание: +' .PHP_EOL;
	echo 'Реальность: ' . $rook->check(6, 2) .PHP_EOL.PHP_EOL;

	echo 'Test Vertical' .PHP_EOL;
	echo 'Начальная позиция:  2, 2' .PHP_EOL;
	echo 'Конечная позиция: (2, 6)?' .PHP_EOL;
	echo 'Ожидание: +' .PHP_EOL;
	echo 'Реальность: ' . $rook->check(2, 6) .PHP_EOL.PHP_EOL;

	echo 'Test Diagonal' .PHP_EOL;
	echo 'Начальная позиция: (2, 2)' .PHP_EOL;
	echo 'Конечная позиция: (6, 6)?' .PHP_EOL;
	echo 'Ожидание: -' .PHP_EOL;
	echo 'Реальность: ' . $rook->check(6, 6) .PHP_EOL.PHP_EOL;
}
