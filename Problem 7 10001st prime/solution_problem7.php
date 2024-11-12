<?php
function is_prime($number){
	for($i = 2;$i < floor(sqrt($number)+1);$i++){
		if($number % $i == 0){
			return false;
		}
	}
	return true;
}

function thPrime($number){
	$counter = 0;
	for($i = 1;$counter <= $number;$i++){
		if(is_prime($i)){
			$counter += 1;
		}
	}
	return $i-1;
}


$number = 10001;
echo "Number $number prime number is: ".thPrime($number)."\n";





?>