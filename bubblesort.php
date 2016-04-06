<?php

$test = array();

for($i = 0; $i < 10000; $i++){
	$test[$i] = rand(1,10000);
}

function bubbleSort($arr){
	$time_start = microtime(true);
	$count = 0;

	while($count < count($arr)-1){

		for($i=1; $i < count($arr)-$count; $i++){
			if($arr[$i] < $arr[$i-1]){
				$temp = $arr[$i];
				$arr[$i] = $arr[$i-1];
				$arr[$i-1] = $temp;
			}
		}

	$count++;
	}
	$time_stop = microtime(true);
	$time = $time_stop - $time_start;
	echo "Sorted in $time seconds.";
	return $arr;
}

$endarr = bubbleSort($test);

var_dump($endarr);


?>