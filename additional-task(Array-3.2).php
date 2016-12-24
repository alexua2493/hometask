<?php
//3.2. Создать массив названий функций php по работе с массивами. Попробовать отсортировать руками, без функций. Попробовать отсортировать существующими функциями.

	$my_array = array("unset", "array_values", "array_keys", "array_map");
/*	$my_array[0] = "array_keys";
	$my_array[1] = "array_map";
	$my_array[2] = "array_values";
	$my_array[3] = "unset";
	print_r($my_array);*/

	sort($my_array);
	print_r($my_array);