<?php
//1.3. Три дробных числа. Выводить то, которое больше после округления, если нет большего - выводить два, если все три равны - выводить три.
$handle = fopen ("php://stdin","r");
$d = round(fgets($handle));
$e = round(fgets($handle));
$f = round(fgets($handle));


if ($d>$e&&$d>$f){
	echo $d;
}
elseif ($e>$d&&$e>$f){
	echo $e;
}
elseif ($f>$e&&$f>$d){
	echo $f;
}
elseif ($d==$e && $e==$f){
	echo $d." ".$e." ".$f;
}

elseif ($d==$e&&$d>$f){
	echo $d." ".$e;
}
elseif ($d==$f&&$d>$e){
	echo $d." ".$f;
}
elseif ($e==$f&&$e>$d){
	echo $e." ".$f;
}