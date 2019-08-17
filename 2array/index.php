<?php

// Debut 17h20 - 10min

$table1= [1, 5, 8, 20, 35,48,59,75,80, 900];
$table2 = [2,4,9,45,77,90,120,458,598,785];
// result = [1,2,4,5,8,9,20,35,48,59,75,77,80,90,120,458,598,785,900]
$result;
$index1 = 0;
$index2 = 0;

// We add until the length of result = the length of table1 + table 2
do {
	// If one index equals the length of its array, we add the remainder of the other array and increase the other index
	// else we keep checking which is smallest and add it to result.
	if($index1 == count($table1)) {
			$result[] = $table2[$index2]; 
			$index2++;
	}elseif($index2 == count($table2)) {
		$result[] = $table1[$index1]; 
		$index1++;
	}elseif($table1[$index1] < $table2[$index2]) {
		$result[] = $table1[$index1];
		$index1 ++;
	}elseif ($table1[$index1] > $table2[$index2]) {
		$result[] = $table2[$index2];
		$index2 ++;
	}else {
		$result[] = $table1[$index1];
		$result[] = $table2[$index2];
		$index1++;
		$index2++;
	}

} while (count($result) < (count($table1) + count($table2)));
 // Tadada !
var_dump($result);
var_dump($index1);
var_dump($index2);
