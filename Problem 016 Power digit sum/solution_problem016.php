<?php
$start = microtime(true);


$number = strval(number_format(pow(2,1000),1000,"",""));
$sum = 0;
for($i = 0;$i < strlen($number);$i++){
	$sum += $number[$i];
}

echo "The sum of the digits of the number 2^1000 is: $sum\n";		


echo ($time_elapsed_secs = microtime(true) - $start)."\n";




?>