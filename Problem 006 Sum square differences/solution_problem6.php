<?php
$start = microtime(true);
$small = 1;
$large = 100;
$sum = ($small + $large) * ($large / 2);
$sum1 = 0;
for($i = 1;$i < 101;$i++){
	$sum1 += pow($i,2);
}
$sum2 = pow($sum,2);

echo "Sum difference between $sum2 and $sum1 is: ".$sum2-$sum1."\n";


echo ($time_elapsed_secs = microtime(true) - $start)."\n";

?>