<?php
//3.4. Создать массив названий профессий на английском. Отдельно создать массив имен. Вывести все варианты сочетаний профессий и имен.

	$pro = array("Driver","Guide","Designer","Historian","Nurse","Animator","Artist");
	$name = array("Andrew","Daniel","William","Ashley","Abigail");

for ($a=0; $a<count($pro); $a++) {
    for ($i=0; $i<count($name); $i++) {
			echo $pro[$a]." ";
			echo $name[$i].PHP_EOL;
		}
}