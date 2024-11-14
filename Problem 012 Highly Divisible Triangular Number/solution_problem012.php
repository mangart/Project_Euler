<?php
$start = microtime(true);

function triangleNumber($number){
	return ($number * ($number+1)) / 2;
	
}

function numOfDevisors($triangleNumber){
	$factors = 0;
	for($i = 1;$i < (floor(sqrt($triangleNumber)) + 1);$i++){
		if($triangleNumber % $i == 0){
			$factors += 1;
		}
	}
	return $factors*2;
}

$stDeliteljev = 500;
for($j = 1;$j < 1000000;$j++){
	$triangleNumber = triangleNumber($j);
	$vsota = numOfDevisors($triangleNumber);
	if($vsota > 500){
		$prvoStevilo = triangleNumber($j);
		break;
	}
}


echo "The first triangular number that has more than 500 devisors is: $prvoStevilo\n";		
//echo "Sum of all prime numbers to the number $number is: ".primeSummation($number)."\n";
echo ($time_elapsed_secs = microtime(true) - $start)."\n";




?>