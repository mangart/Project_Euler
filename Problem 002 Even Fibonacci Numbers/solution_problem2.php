<?php

$fibo1 = 1;
$fibo2 = 1;
$fibo_cur = 0;
$sum = 0;
$treshold = 4000000;
while(true){
	$fibo_cur = $fibo1 + $fibo2;
	if($fibo_cur > $treshold){
		break;
	}
	if($fibo_cur % 2 == 0){
		$sum += $fibo_cur;
	}
	$fibo1 = $fibo2;
	$fibo2 = $fibo_cur;
}
echo "The solution is: ".$sum."\n";





?>