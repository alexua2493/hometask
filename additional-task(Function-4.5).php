<?php
//4.5. Написать функцию, которая в строке будет заменять слово fuck на f**k :)
$handle = fopen ("php://stdin","r");
$string = fgets($handle);
$string = strtr($string, 'fuck', 'f**k');
echo $string;