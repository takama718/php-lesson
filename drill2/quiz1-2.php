<?php
#数列arrayをいれると乗数を返す
function array_square($array){
	$squared_array = array();
	foreach($array as $n){
		$squared_array[] = $n * $n;
	}
	return $squared_array;
}
var_dump(array_square(array(1,2,3)));
