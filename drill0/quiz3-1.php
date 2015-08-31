<?php
function printEvenNumList($n){
	for($i=1; $i<=$n; $i++){
		if($i%2==0){
			echo $i.',';
		}
	}
}
echo printEvenNumList(11);
