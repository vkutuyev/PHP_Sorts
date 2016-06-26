<?php

$test = array();

for($i = 0; $i < 5000; $i++){
	$test[$i] = rand(1,5000);
}

function insertSort($arr){
	$time_start = microtime(true);

	for ($i = 1; $i < count($arr); $i++){

		$count = $i;

		while( $count > 0 && $arr[$count] < $arr[$count - 1] ){
			$temp = $arr[$count - 1];
			$arr[$count - 1] = $arr[$count];
			$arr[$count] = $temp;
			$count--;
		}

	}

	$time_stop = microtime(true);
	$time = $time_stop - $time_start;
	echo "Sorted in $time seconds.";

	return $arr;
}


$endarr = insertSort($test);

echo '<pre>';
var_dump($endarr);
echo '</pre>';

?>
