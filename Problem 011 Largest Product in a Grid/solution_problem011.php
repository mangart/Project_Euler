<?php
$start = microtime(true);
$grid = array();
$lines = file("grid.txt");
foreach($lines as $line) {
	array_push($grid,array_map("intval",explode(" ",$line)));
}
$product = 0;
for($i = 0;$i < count($grid);$i++){
	for($j = 0;$j < count($grid[$i]);$j++){
		$tren_prod = 1;
		// down
		if(isset($grid[$i+3][$j]) && isset($grid[$i+2][$j]) && isset($grid[$i+1][$j]) && isset($grid[$i][$j])){
			$tren_prod = $grid[$i][$j] * $grid[$i+1][$j] * $grid[$i+2][$j] * $grid[$i+3][$j];
			if($tren_prod > $product){
				$product = $tren_prod;
			}
		}
		// right
		if(isset($grid[$i][$j+3]) && isset($grid[$i][$j+2]) && isset($grid[$i][$j+1]) && isset($grid[$i][$j])){
			$tren_prod = $grid[$i][$j] * $grid[$i][$j+1] * $grid[$i][$j+2] * $grid[$i][$j+3];
			if($tren_prod > $product){
				$product = $tren_prod;
			}
		}
		// right diagonal
		if(isset($grid[$i+3][$j+3]) && isset($grid[$i+2][$j+2]) && isset($grid[$i+1][$j+1]) && isset($grid[$i][$j])){
			$tren_prod = $grid[$i][$j] * $grid[$i+1][$j+1] * $grid[$i+2][$j+2] * $grid[$i+3][$j+3];
			if($tren_prod > $product){
				$product = $tren_prod;
			}
		}
		// left diagonal
		if(isset($grid[$i+3][$j-3]) && isset($grid[$i+2][$j-2]) && isset($grid[$i+1][$j-1]) && isset($grid[$i][$j])){
			$tren_prod = $grid[$i][$j] * $grid[$i+1][$j-1] * $grid[$i+2][$j-2] * $grid[$i+3][$j-3];
			if($tren_prod > $product){
				$product = $tren_prod;
			}
		}
	}
}
		
echo "The maximum product of 4 adjecent numbers on the grid is: $product\n";		
//echo "Sum of all prime numbers to the number $number is: ".primeSummation($number)."\n";
echo ($time_elapsed_secs = microtime(true) - $start)."\n";




?>