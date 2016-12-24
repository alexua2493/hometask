<?php
//4.2. Написать функцию для подсчета количества элементов в многоуровневом массиве, т.е. функция должна вернуть строку вида: "Array of arrays of arrays of strings", к примеру.

$b = array ( 'a', 'b', array('c', array('d', 'e', array('f', 'g'))), 'h');
ob_start();
print_r($b);
$a = ob_get_clean();
$max=0;
$cur=0;
for ($i = 0; $i < strlen($a); $i++)
{
    if ($a[$i] == "(")
        $cur++;
    if ($a[$i] == ")")
        $cur--;
    if ($cur > $max)
        $max = $cur;        
}

for ($i = 1; $i <= $max; $i++) {
	if ($i == 1) echo "Array of ";
	elseif ($i == $max)echo "arrays of strings".PHP_EOL;
	else echo "arrays of ";
}
echo count($b, COUNT_RECURSIVE)." - elements in the array";
/*немного запутался с этим заданием, надеюсь правильно понял задачу.
в задаче показал вложенность и колличество эллементов