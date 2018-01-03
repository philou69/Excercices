<?php

function isPrime(int $number) : bool
{
	if($number == 2 || $number == 3 ) {
		return true;
	}

	$square_root = sqrt($number);
	if(is_int($square_root)) {
		return false;
	}
	
	$denominator = 3;
	do {
		if($number % $denominator == 0) {
			return false;
		}
		$denominator +=2;
	} while ($denominator < $square_root);

	return true;
}

$i=2;
while($i < 1000) {

	echo $i .' ' . (isPrime($i) ? 'un nombre Premier' : "n'est pas un nombre premier") . "<br>";
	$i++;
}