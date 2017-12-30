<?php

// Debut 17h20 - 10min

$table1= [1, 5, 8, 20, 35,48,59,75,80, 900];
$table2 = [2,4,9,45,77,90,120,458,598,785];
// result = [1,2,4,5,8,9,20,35,48,59,75,77,80,90,120,458,598,785,900]
$result;

// the loop is stop when the 2 arrays are empty
do {

	if(empty($table1)) {
		$result[] = $table2[0];
		unset($table2[0]);
		$table2 = array_values($table2);
	}elseif(empty($table2)) {
		$result[] = $table1[0];
		unset($table1[0]);
		$table1 = array_values($table1);
	}else{
		if($table1[0] < $table2[0]) {
			$result[] = $table1[0];
			unset($table1[0]);
			$table1 = array_values($table1);
		}elseif ($table1[0] > $table2[0]) {
			$result[] = $table2[0];
			unset($table2[0]);
			$table2 = array_values($table2);
		}else{
			$result[] = $table1[0];
			unset($table1[0]);
			$table1 = array_values($table1);
			$result[] = $table2[0];
			unset($table2[0]);
			$table2 = array_values($table2);
		}
	}

} while (!empty($table1) || !empty($table2));

 // Tadada !
var_dump($result);
var_dump($table1);
var_dump($table2);
