<?php
function fact($n){
	if($n === 1){
		return 1;
	}else{
	$i = $n * fact($n-1);
		return $i;
	}
}
echo fact(10);
