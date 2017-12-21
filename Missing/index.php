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
// We create 3 variable
/*
start the first range 
end the last of range 
find a boolean status of the search
*/
$start = 0;
$end = count($numbers) - 1;
$find = false;

do {
	// We calculate the half of the range 
	// on the first boucle, its the (0+999999) /2 
	$half =  floor(($start + $end) / 2);

	/*
	 We check if we are on the next or previous number of the missing number
	*/
	if($numbers[$half] + 2 == $numbers[$half+1] ) {
		$findNumber = $numbers[$half] + 1;
		$find = true;
	}elseif($numbers[$half] - 2 == $numbers[$half-1] ) {
		$findNumber = $numbers[$half] - 1;
		$find = true;
	}else {
		// We haven't find the missing number
		// If the key +1 = the value, that mean the missing number is up to the position else the missing number is down the position.
		// than start or end takes the value of hal +/- 1
		if($numbers[$half] == $half + 1) {

			$start = $half + 1;
		} else {
			$end = $half - 1;
		}
	}

} while ($find == false);




echo "the missing number is : " . $deletedNumber . "  \n";
echo " You find : " . $findNumber . "\n";