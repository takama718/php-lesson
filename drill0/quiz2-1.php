<?php

function printNumList($n){
	for($i=1; $i<=$n; $i++){
		echo $i.',';
	}
}
echo printNumList(10);
