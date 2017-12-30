<?php
require 'vendor/autoload.php';
// debut 12h50 -> fin 14h02 wouhou


// Two sentences with or without identical characters
$unique = "Abcdroeghuq";

$notUnique = "Je contiens plusieurs fois les même caractères";



function isUnique(string $phrase) : bool
{
	// We are storing each characters at index of an array
	$uniqueChars = new Ds\Set();
	for ($i=0; $i < strlen($phrase); $i++) {
		// if the char is a space, we passing because a sentence have mutliple spaces 
		if($phrase[$i] == " ") {
			continue;
		}

		// if the char is an index at the array, the sentence have several time the char
		if($uniqueChars->contains($phrase[$i])) {
			return false;
		}
		// else we create the index in the array
		$uniqueChars->add($phrase[$i]);

	}
	// After all, the sentence have only unique chars.
	return true;
}

echo $unique  . (isUnique($unique) ? ' is unique' : " is not unique" ). " <br>" ;
echo $notUnique  . (isUnique($notUnique) ? ' is unique' : " is not unique" ). " <br>" ;