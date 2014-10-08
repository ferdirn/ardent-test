<?php

// input data
$n = 1000;

// the one and only variable allowed
$arr = array();

do {
	array_push($arr, $n);
} while (--$n > 0);

do {
	// echo array_pop($arr).' '.array_pop($arr).' * '.array_pop($arr).' '.array_pop($arr).' '.array_pop($arr).' * ';

	echo array_pop($arr).' ';
	if ($arr) echo array_pop($arr).' * ';
	if ($arr) echo array_pop($arr).' ';
	if ($arr) echo array_pop($arr).' ';
	if ($arr) echo array_pop($arr).' * ';

} while ($arr);

?>
