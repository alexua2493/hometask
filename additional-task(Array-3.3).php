<?php
// 3.3. Создать массив, где имя и фамилия - ключ, а название уровня английского (elementary, pre-intermediate, intermediate, upper intermediate, advanced, native). Показать по убыванию уровня.

$level = array(
		"Jacob Austin" =>"advanced",
		"Michael Backer" =>"upper intermediate",
		"Olivia Crossman" =>"elementary",
		"Andrew Douglas" =>"intermediate",
		"Daniel Faber" =>"native",
		"Madison Gill" =>"pre-intermediate");

$levels["native"]= array_search("native", $level);
$levels["advanced"]= array_search("advanced", $level);
$levels["upper intermediate"]= array_search("upper intermediate", $level);
$levels["intermediate"]= array_search("intermediate", $level);
$levels["pre-intermediate"]= array_search("pre-intermediate", $level);
$levels["elementary"]= array_search("elementary", $level);
$level = array_flip($levels); $levels = false;

print_r($level);