<?php
//1.2. Три переменные - три числа. Выводить то, которое среднее.
$handle = fopen ("php://stdin","r");
$a = fgets($handle);
$b = fgets($handle);
$c = fgets($handle);

if (($a > $b && $a < $c)||($a < $b && $a > $c)) {
	echo $a."<br>";
}
elseif (($b > $a && $b < $c)||($b < $a && $b > $c)) {
	echo $b."<br>";
}
else echo $c."<br>";