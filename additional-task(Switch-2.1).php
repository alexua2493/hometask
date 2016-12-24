<?php
//2.1. В переменной имя. В зависимости от того, какое там имя из четырех заранее известных, написать, мальчик это или девочка. Если имя общее - написать, что унисекс. Если имя не перечисленно: по умолчанию мальчик.
$handle = fopen ("php://stdin","r");
$name = fgets($handle);

switch ($name) {
case "John":
	echo "he is a boy";
	break;
case "Angel":
	echo "name is unisex";
	break;
case "Kate":
	echo "she is a girl";
	break;
case "Mark":
	echo "he is a boy";
	break;
default:
	echo "he is a boy";
}