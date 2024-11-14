<?php
// Optimized with saving the calculations so that we don't need to recalculate already known terms it improves speed from 9.5s to 0.5s

$start = microtime(true);

function forEven($n){
	return $n / 2;
}

function forOdd($n){
	return 3 * $n + 1;
}

$maxTerms = 0;
$startNumber = 2;
$savedTerms = array();
for($i = 2;$i < 1000000;$i++){
	$num = $i;
	$terms = array();
	while($num != 1){
		if(isset($savedTerms[$num])){
			$savedTerms[$i] = $savedTerms[$num] + count($terms);
			break;
		}
		array_push($terms,$num);
		if($num % 2 == 0){
			$num = forEven($num);
		} else {
			$num = forOdd($num);
		}
	}
	if(!isset($savedTerms[$i])){
		$savedTerms[$i] = count($terms);
	}
	if($maxTerms < $savedTerms[$i]){
		$maxTerms = $savedTerms[$i];
		$startNumber = $i;
	}
}


echo "The starting number that produces the largest Collatz sequence ($maxTerms) is: $startNumber\n";		

echo ($time_elapsed_secs = microtime(true) - $start)."\n";




?>