<?php

$numbers = [];
$indexes = [];
$number = mt_rand(1, 100000);

// do {
// 	$randNumber = mt_rand(1, 100000);

// 	if($randNumber != $number && !in_array($randNumber, $numbers)) {
// 		$numbers[] = $randNumber;
// 	}
// 	echo  count($numbers) . "\n";
// } while (count($numbers) != 99999);
for ($i=1; $i < 100001; $i++) { 
	if($i == $number ) {
		continue;
	}
	do {
		$index = mt_rand(0, 99999);
	} while (in_array($index, $indexes));

	$indexes[] = $index;

	$numbers[$index] = $i;
}
$total = 0;
$date = microtime(true);
foreach ($numbers as $num ) {
	$total += $num;
}
$date2 = microtime(true);
$resutl = array_sum($numbers);
$date3 = microtime(true);

$findNumber = ((100000 + 1) * 50000) - $total;




echo 'nombre à trouver : ' . $number . "\n";
echo "vous avez trouvez : " . $findNumber . "\n";
echo " total " . ($date2 - $date);
echo " resultat  " . ($date3 - $date2);