<?php

$num1 = 3;
$num2 = 5;
$sum = 0;
for($i = 1;$i < 1000;$i++){
	if($i % $num1 == 0 || $i % $num2 == 0){
		$sum += $i;
	}
}
echo "The solution is: ".$sum."\n";





?>