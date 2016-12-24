<?php
//3.5. Усложненный вариант предидущей задачи: и профессии и имена имеют еще и род, и профессии должны сочетаться по роду, женскому или мужскому.

	$pro = array("Driver"=>"male","Guide"=>"female","Designer"=>"female","Historian"=>"male","Nurse"=>"female","Animator"=>"female","Artist"=>"male");
	$name = array("Andrew"=>"male","Daniel"=>"male","William"=>"male","Ashley"=>"female","Abigail"=>"female");

$kpro = array_keys($pro);
$kname = array_keys($name);
$vpro = array_values($pro);
$vname = array_values($name);

for ($a=0; $a<count($vpro); $a++) {
    for ($i=0; $i<count($vname); $i++) {
    		if($vpro[$a] == $vname[$i]) {
			echo $kpro[$a]." ";
			echo $kname[$i].PHP_EOL;}
		}
}
