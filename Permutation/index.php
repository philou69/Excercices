<?php

function isPermutation(string $phrase1, string $phrase2) : bool
{
	// First, if the sentences without spaces aren't the same length, they are not a permutation
	if( strlen(str_replace(' ', '', $phrase1)) !== strlen(str_replace(' ', '', $phrase2)) ) {
		return false;
	}
	$charsPhrase1 = [];
	// We create an array with chars of the first sentence on idex and the quantity in value
	for ($i=0; $i < strlen($phrase1); $i++) { 
		if($phrase1[$i] == ' ') {
			continue;
		}
		if(isset($charsPhrase1[$phrase1[$i]])) {
			$charsPhrase1[$phrase1[$i]] ++;
		} else {
			$charsPhrase1[$phrase1[$i]] = 1;
		}
	}

	// then we check if the chars of the phrase2 are in the array
	for ($i=0; $i < strlen($phrase2); $i++) { 
		if(!isset($charsPhrase1[$phrase2[$i]])) {
			return false;
		} 

		if($charsPhrase1[$phrase2[$i]] == 1) {
			unset($charsPhrase1[$phrase2[$i]]);
		} else {
			$charsPhrase1[$phrase2[$i]] --;
		}
	}

	// if we coming here, there is a permutation
	return true;

}

$permutation1 = 'bob';
$permutation2 = "obb";

echo $permutation1 . " et " . $permutation2 . " " . (isPermutation($permutation1, $permutation2) ? 'sont une permutation' : 'ne sont pas une permutation ') . '<br>';

$permutation1 = 'Je suis une phrase !';
$permutation2 = "Je ne suis pas une permutation de l'autre phrase";

echo $permutation1 . " et " . $permutation2 . " " . (isPermutation($permutation1, $permutation2) ? 'sont une permutation' : 'ne sont pas une permutation') . '<br>';

$permutation1 = 'Je suis une phrase !';
$permutation2 = 'Je suis une phrese !';

echo $permutation1 . " et " . $permutation2 . " " . (isPermutation($permutation1, $permutation2) ? 'sont une permutation' : 'ne sont pas une permutation');