<?php

function readFromConsole(){
	$array=[];
	echo 'Введите числа: ';
	$input='';
	while ($input!=='end'){
        $input =trim(fgets(STDIN));
		$array[]=$input;
	}
	return $array;
}