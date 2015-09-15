<?php
#ある文字列sが回文であるか否かをチェックする関数 isPalindrome($s) 
function isPalindrome($str){
	$len      = strlen($str);
		for($i = 0; $i<$len; $i++){
			if(substr($str,$i)===substr($str(len-$i))){
				return false;
				exit;
			}
		}
	return true;
}
var_dump(isPalindrome(array(abcdef)));
var_dump(isPalindrome(array(aaaaaa)));
