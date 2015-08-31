<?php
//1~nの偶数を出力:wq:
function printEvenNumList($n){
	for($i=2; $i<=$n; $i=$i+2){
		echo $i.',';
	}
}
echo printEvenNumList(11);

