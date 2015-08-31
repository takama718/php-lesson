<?php
function drawStep($stepQty){
	for($i=0; $i<=$stepQty; $i++){
		for($j=0; $j<=$i; $j++){
			echo '■';
		}
		echo "\n";
	}

}
echo drawStep(10);
