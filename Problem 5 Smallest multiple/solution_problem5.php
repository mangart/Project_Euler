<?php

$primes = array(2,3,5,7,11,13,17,19);
$largestPrimes = array();
foreach($primes as $prime){
	$largestPrimes[$prime] = 0;
}

for($i = 20;$i > 1;$i--){
	foreach($primes as $prime){
		$stev = 0;
		$temp = $i;
		while($temp % $prime == 0){
			$stev += 1;
			$temp = $temp / $prime;
		}
		if($largestPrimes[$prime] < $stev){
			$largestPrimes[$prime] = $stev;
		}
	}
}
var_dump($largestPrimes);
$product = 1;
foreach($largestPrimes as $key => $prime){
	$product = $product * pow($key,$prime);
}
echo "The smallest number that can be devided by all numbers from 1 to 20 without remainder is: ".$product."\n";


?>