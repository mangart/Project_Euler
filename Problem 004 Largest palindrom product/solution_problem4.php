<?php

function largest_palindrom(){
	for($i = 999;$i > 99;$i--){
		$istr = strval($i);
		$istr = $istr.strrev($istr);
		$istr = intval($istr);
		//echo "Palindrom je: ".$istr."\n";
		for($j = 999;$j > 99;$j--){
			if($istr % $j == 0){
				$k = $istr / $j;
				if($k > 99 && $k < 1000){
					echo "The largest palindrom is: ".$istr." which is the product of: ".$j." and ".$k."\n";
					return $istr;
				}
			}
		}
	}
}

echo "The largest palindrom is: ".largest_palindrom()."\n";





?>