<?php
function array_square($array){
	$squared_array = array();
	for($i = 0; $i < count($array); $i++){
		$squared_array[] = $array[$i]*$array[$i]; 
	}
	return $squared_array;
}
var_dump(array_square(array(1,2,3)));
