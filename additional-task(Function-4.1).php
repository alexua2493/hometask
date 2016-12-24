<?php
//4.1. Написать функцию для красивого вывода массива, где ключом может быть число или строка, и значением может быть число или строка.

$arr = array(
	"seven" => 11, "jellyfish" => 25,
	38 => "monkey","four" => 44,
	"five" => 53, 67 => "tower",
	73 => "dog","elephant" => 22,
	"nine" => 92, 0 => "zombie");

$arr1 = array_keys($arr);
$arr2 = array_values($arr);

for ($a=0; $a<count($arr); $a++) {
	if (is_numeric($arr1[$a])) {
		$n = $arr1[$a];
		$arr1[$a] = $arr2[$a];
		$arr2[$a] = $n;
}
	$arr3[$arr1[$a]] = $arr2[$a];

}
//обнуляю временные массивы
ksort($arr3);
$arr = false;
$arr1 = false;
$arr2 = false;
$arr = $arr3;
$arr3 = false;

print_r($arr);