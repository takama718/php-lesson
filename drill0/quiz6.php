<?php
function baisu($n){
//基本の機能：引数までの値を返す処理
	for($i = 1 ;$i <= $n ;$i++){		
//二の倍のとき
		if($i % 6 === 0){
			echo 'piyo,';
		}else if($i % 3 === 0){
			echo 'fuga,';
		}else if($i % 2 === 0){
			echo 'hoge,';
		}else {
			echo $i.',';
		}
	}
}
echo baisu(10);
