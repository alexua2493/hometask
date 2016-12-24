<?php
//4.3. Написать функцию для вывода чисел от указанного до нуля в обратном порядке.

$handle = fopen ("php://stdin","r");
$number = fgets($handle);

while ($number>0) {
	$number-=1;
	echo $number.PHP_EOL;
}
while ($number<0) {
	$number+=1;
	echo $number.PHP_EOL;
}
//функция стремится к нулю от любого числа