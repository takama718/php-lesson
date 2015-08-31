<?php
function fib_array($n){
	for($i = 0; $i <= $n; $i++){
		$b[$i]= fib($i);
	}
	return $b;
}
function fib($n){
	if($n <= 0){
		return 0;
	}
	if($n == 1){
		return 1;
	}
	return fib($n -1)+fib($n -2);
}
print_r(fib_array(5));
