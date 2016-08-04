<?php

$arr = array(8,4,3,7,6,5,1,2);

$all_cnt = 0;
$exchange_cnt = 0;


for($idx = 0; $idx < count($arr); $idx++){
	$excnange_flg = false;
	for($idx2 = 1; $idx2 < count($arr); $idx2++){
		$all_cnt++;
		if($arr[$idx2 -1] > $arr[$idx2]){
			$exchange_cnt++;
			$tmp = $arr[$idx2];
			$arr[$idx2] = $arr[$idx2 -1];
			$arr[$idx2 -1] = $tmp;
			unset($tmp);
			$excnange_flg = true;
		}
	}
	if(!$excnange_flg){
		break;
	}
}

var_export($arr);
var_dump($exchange_cnt);
var_dump($all_cnt);