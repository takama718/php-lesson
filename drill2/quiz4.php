<?php
#ある配列の全ての要素を足し合わせる関数 my_array_sum() を書け。
function my_array_sum($array){
	$sum = 0;
	foreach($array as $n){
		$sum + $n= $sum;
	}
	return $sum;
}
var_dump(my_array_sum(array(1.2.3)));
