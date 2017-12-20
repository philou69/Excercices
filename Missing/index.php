<?php

$numbers = [];

// We store an aleatory choose number of the array then we  remove him
$indexAleatory = rand(0, 999999);
$deletedNumber = $indexAleatory + 1;
// We fulling the numbers array
for ($i=1; $i < 1000001; $i++) { 
	if($i == $deletedNumber) {
		continue;
	}
	$numbers[] = $i;
}

// Now we have to find the remove number
$index = floor((count($numbers) -1 ) / 2);
do {
	// If the value = the key( index) + 2 and the key = the previous value, we have the position missing 
	if ($numbers[$index] == $index + 2 && $numbers[$index-1] == $index) {
		$findNumber = $numbers[$index] - 1;

	}
	if( $numbers[$index] == $index + 1 && $numbers[$index + 1 ] == $index +3) {
		$findNumber = $numbers[$index] + 1; 
	}
	// We have not passe the missing number	
	if ( $numbers[$index] == ($index + 1) ) {
		// We get the value of last index or the value ot the length of numbers
		if( !isset($lastIndex)) {
			$lastIndex = count($numbers) - 1 ;
		} elseif ( $lastIndex < $index) {
			$lastIndex = $index + (($index - $lastIndex) * 2);
		}

		$nextIndex =  $index + floor(($lastIndex - $index) /2);
		$lastIndex = $index;
		$index = $nextIndex;
		// echo " pas encore  \n";
	} else {
		// We get the value of last index or 0
		if( !isset($lastIndex)) {
			$lastIndex = 0;
		} elseif ($lastIndex > $index) {
			$lastIndex = $index - (($lastIndex - $index) * 2);
		}

		$nextIndex =  $index - floor(($index - $lastIndex) /2);
		$lastIndex = $index;
		$index = $nextIndex;
	}

} while (!isset($findNumber));

echo "the missing number is : " . $deletedNumber . "  \n";
echo " You find : " . $findNumber;