<?php
$start = microtime(true);
function is_prime($number){
	for($i = 2;$i < floor(sqrt($number)+1);$i++){
		if($number % $i == 0){
			return false;
		}
	}
	return true;
}

function primeSummation($number){
	$sum = 0;
	for($i = 2;$i < $number;$i++){
		if(is_prime($i)){
			$sum += $i;
		}
	}
	return $sum;
}


$number = 2000000;
echo "Sum of all prime numbers to the number $number is: ".primeSummation($number)."\n";
echo ($time_elapsed_secs = microtime(true) - $start)."\n";




?>