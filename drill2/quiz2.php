<?php
#あるリストを反転する関数、 reverse() を書け。
function reverse($array){
	$reversed_array=array();
	foreach($array as $n){
		$reverse_array=$n;
	}
	return $reversed_array;
}
var_dump(reverse(array(1,2,3)));
