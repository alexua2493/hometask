<?php
//4.4. Написать фунцию, которая будет в строке заменять все большие буквы на маленькие, а все буквы r заменять на восклицательный знак.

$handle = fopen ("php://stdin","r");
$string = fgets($handle);
$string = mb_strtolower($string);
$string = strtr($string, 'r', '!');
echo $string;