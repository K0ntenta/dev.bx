<?php

function find($test){
	sort($test);
	return count($test) - array_search(max($test), $test);
}