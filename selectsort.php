<?php

$test = array();

for($i = 0; $i < 3000; $i++){
	$test[$i] = rand(1,10000);
}

function sortArray($arr){
	$time_start = microtime(true);
	$count = 0;
	
	while( $count < count($arr)){

		$min = $arr[$count];
		$minpos = $count;

		for($x = $count; $x < count($arr); $x++){
			if($arr[$x] < $min){
				$min = $arr[$x];
				$minpos = $x;
			}
		}

	
		$temp = $arr[$count];
		$arr[$count] = $arr[$minpos];
		$arr[$minpos] = $temp;
		
		$count++;

	}

	$time_stop = microtime(true);
	$time = $time_stop - $time_start;
	echo "Sorted in $time seconds.";

	return $arr;

}


$endarr = sortArray($test);

var_dump($endarr);

?>