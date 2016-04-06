<?php

$test = array();

$maincount = 0;

for($i = 0; $i < 3000; $i++){
	$test[$i] = rand(1,10000);
}

$time_start = microtime(true);

function radixSort($arr){
	

	global $bins;

	$count = 0;
	$max = $arr[0];
	for($a = 1; $a < count($arr); $a++){
		if($arr[$a] > $max){
			$max = $arr[$a];
		}
	}

	while($count < strlen((string)$max)) {
		
		$bins = array(0,0,0,0,0,0,0,0,0,0);
		
		$secarr = array();
		for($a = 0; $a < count($arr); $a++){
			$secarr[$a] = '';
		}

		// var_dump($secarr);

		for($i = 0; $i < count($arr); $i++){

			$bins[$arr[$i] % 10]++;

			// echo "inc bin counts for single digit";
			// var_dump($bins);
		}


		for($j = 0; $j < 9; $j++){
			$bins[$j+1] += $bins[$j];
		}

		// echo "adding bin counts down the line";
		// var_dump($bins);


		for($x = count($arr)-1; $x >= 0; $x--){
			$bins[$arr[$x] % 10]--;
			$secarr[$bins[$arr[$x] % 10]] = $arr[$x];
		}

		// var_dump($secarr);

		for($z = 0; $z < count($arr); $z++){
			$arr[$z] = $secarr[$z] / 10;
		}

		// var_dump($arr);

		// var_dump($arr);

		$count++;

	}

	// var_dump($arr);

	global $maincount;
	$maincount = $count;
	return $arr; 

}

$endarr = radixSort($test);

while($maincount > 0){
	for($q = 0; $q < count($endarr); $q++){
		$endarr[$q] = $endarr[$q] * 10;
	}
$maincount--;
}

$time_stop = microtime(true);
$time = $time_stop - $time_start;
echo "Sorted in $time seconds.";

var_dump($endarr);

?>