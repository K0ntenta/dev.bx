<?php

function readFromConsole(){
	$array=[];
    $input='';
	echo 'Введите числа через Enter, для завершения введите X: ';
	while ($input!=='X'){
        $input =trim(fgets(STDIN));
        if (is_numeric($input))
		    $array[]=$input;
	}
	return $array;
}