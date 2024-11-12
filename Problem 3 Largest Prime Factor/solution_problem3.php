<?php

function is_prime($number){
	for($i = 2;$i < floor(sqrt($number)+1);$i++){
		if($number % $i == 0){
			return false;
		}
	}
	return true;
}

function largest_prime_factor($number){
	$primeFactors = array();
	for($i = 2;$i < floor(sqrt($number)+1);$i++){
		if(is_prime($i)){
			if($number % $i == 0){
				$pair = $number / $i;
				array_push($primeFactors,$i);
				if(is_prime($pair)){
					array_push($primeFactors,$pair);
				}
			}
		}
	}
	var_dump($primeFactors);
	return $primeFactors[count($primeFactors)-1];
}

$number = 600851475143;
echo "The solution is: ".largest_prime_factor($number)."\n";





?>