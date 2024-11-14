<?php
$start = microtime(true);

function forEven($n){
	return $n / 2;
}

function forOdd($n){
	return 3 * $n + 1;
}

$maxTerms = 0;
$startNumber = 2;

for($i = 2;$i < 1000000;$i++){
	$num = $i;
	$terms = array();
	while($num != 1){
		array_push($terms,$num);
		if($num % 2 == 0){
			$num = forEven($num);
		} else {
			$num = forOdd($num);
		}
	}
	if($maxTerms < count($terms)){
		$maxTerms = count($terms);
		$startNumber = $i;
	}
}


echo "The starting number that produces the largest Collatz sequence ($maxTerms) is: $startNumber\n";		

echo ($time_elapsed_secs = microtime(true) - $start)."\n";




?>