<?php
//1~nを出力
function printNumList($n){
	$i = 0;
	while ($n > 0){
		$i++;
		echo $i.',';
		$n--;
	}
}
$n =10;
echo printNumList($n);
echo $n;
