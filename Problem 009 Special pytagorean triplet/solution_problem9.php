<?php
$start = microtime(true);
$a = 0;
$b = 200;
$c = 400;
for($a = 1;$a < 1000;$a++){
	for($b = 1;$b < 1000;$b++){
		for($c = 1;$c < 1000;$c++){
			if((($a + $b + $c) == 1000) && (pow($a,2) + pow($b,2)) == pow($c,2)){
				echo "A: $a, B: $b, C: $c\n";
				echo "Produkt je: ".$a*$b*$c."\n";
			}
		}
	}
}
echo ($time_elapsed_secs = microtime(true) - $start)."\n";




?>