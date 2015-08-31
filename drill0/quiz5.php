<?php
function baisu($n){
//基本の機能：nまでの値を返す処理
	for($i = 1 ;$i <= $n ;$i++){		
//三の倍数
		if($i % 3 === 0 or strpos($i,'3') !== false){
			echo 'aho,';
		}
		else {
			echo $i.',';
		}
	}
}
echo baisu(40);
