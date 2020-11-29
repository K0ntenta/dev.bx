<?php

require_once 'testing.php';
require_once 'chessClasses.php';

testing();

echo 'Введите начальную и конечную позиции ладьи через пробел:'.PHP_EOL;

$string = trim(fgets(STDIN));
$pos = explode(' ', $string);

$rook = new Rook($pos[0], $pos[1]);

if ($rook->check($pos[2], $pos[3]) == 'ДА')
{
	echo 'Ладья походит'.PHP_EOL;
}
else
{
	echo 'Ладья не походит'.PHP_EOL;
}
