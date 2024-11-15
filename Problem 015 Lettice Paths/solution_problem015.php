<?php
$start = microtime(true);

// works but takes way to long
function numberOfPaths($i,$j,$currentPath,&$allSequences,$max){
	if($i == $max && $j == $max){
		$allSequences += 1;
		return 0;
	}
	if($i < $max){
		$currentPath1 = $currentPath;
		array_push($currentPath1,"D");
		numberOfPaths($i+1,$j,$currentPath1,$allSequences,$max);
	}
	if($j < $max){
		$currentPath2 = $currentPath;
		array_push($currentPath2,"R");
		numberOfPaths($i,$j+1,$currentPath2,$allSequences,$max);
	}
}


function factorial($number){
	$product = 1;
	for($i = 1;$i <= $number;$i++){
		$product *= $i;
	}
	return $product;
}

function getNumberOfPaths($number){
	return (factorial(2*$number) / (factorial($number)*factorial($number)));
}

$allSequences = getNumberOfPaths(20);
echo "Number of paths in a 20x20 grid is: $allSequences\n";		


echo ($time_elapsed_secs = microtime(true) - $start)."\n";




?>