<?php
//1.1. Две переменные - два числа. Выводить то, которое больше.
$handle = fopen ("php://stdin","r");
$x = fgets($handle);
$y = fgets($handle);

if ($x>$y) {
	echo "result is ".$x;
}
elseif ($y>$x) {
	echo "result is ".$y;
}
else {
	echo "X and Y are equal";
}