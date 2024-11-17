<?php
$start = microtime(true);



function numberWord($number){
	$word = "";
	$hundretPart = 0;
	$tenPart = 0;
	$onePart = 0;
	if($number / 100 >= 1){
		$hundretPart = intval(floor($number / 100));
		$number = intval(substr(strval($number),1));
	}
	if($number / 10 >= 1){
		$tenPart = intval(floor($number / 10));
		$number = intval(substr(strval($number),1));
	}
	$onePart = $number;
	if($hundretPart > 0){
		switch($hundretPart) {
			case 1:
				$word = "onehundred";
				break;
			case 2:
				$word = "twohundred";
				break;
			case 3:
				$word = "threehundred";
				break;
			case 4:
				$word = "fourhundred";
				break;
			case 5:
				$word = "fivehundred";
				break;
			case 6:
				$word = "sixhundred";
				break;
			case 7:
				$word = "sevenhundred";
				break;
			case 8:
				$word = "eighthundred";
				break;
			case 9:
				$word = "ninehundred";
				break;
		}
	}
	if($hundretPart >0 && ($tenPart > 0 || $onePart > 0)){
		$word = $word."and";
	}
	if($tenPart > 0){
		if($tenPart == 1){
			switch($onePart){
				case 0:
					$word = $word."ten";
					break;
				case 1:
					$word = $word."eleven";
					break;
				case 2:
					$word = $word."twelve";
					break;
				case 3:
					$word = $word."thirteen";
					break;
				case 4:
					$word = $word."fourteen";
					break;
				case 5:
					$word = $word."fifteen";
					break;
				case 6:
					$word = $word."sixteen";
					break;
				case 7:
					$word = $word."seventeen";
					break;
				case 8:
					$word = $word."eighteen";
					break;
				case 9:
					$word = $word."nineteen";
					break;
			}
		} else {
			switch($tenPart){
				case 2:
					$word = $word."twenty";
					break;
				case 3:
					$word = $word."thirty";
					break;
				case 4:
					$word = $word."forty";
					break;
				case 5:
					$word = $word."fifty";
					break;
				case 6:
					$word = $word."sixty";
					break;
				case 7:
					$word = $word."seventy";
					break;
				case 8:
					$word = $word."eighty";
					break;
				case 9:
					$word = $word."ninety";
					break;
			}
		}
	}
	if($tenPart != 1){
		switch($onePart){
		case 1:
			$word = $word."one";
			break;
		case 2:
			$word = $word."two";
			break;
		case 3:
			$word = $word."three";
			break;
		case 4:
			$word = $word."four";
			break;
		case 5:
			$word = $word."five";
			break;
		case 6:
			$word = $word."six";
			break;
		case 7:
			$word = $word."seven";
			break;
		case 8:
			$word = $word."eight";
			break;
		case 9:
			$word = $word."nine";
			break;
		}
	}
	return $word;
}


function numberOfLetters($number){
	$sum = 0;
	for($i = 1;$i <= $number;$i++){
		if($i != 1000){
			$sum += strlen(numberWord($i));
		}
	}
	return $sum;
}

echo "Number of letters in number/words from 1 to 1000 inclusive is: ".numberOfLetters(1000)+strlen("onethousand")."\n";
	


echo ($time_elapsed_secs = microtime(true) - $start)."\n";




?>