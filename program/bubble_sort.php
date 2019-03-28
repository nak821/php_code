<?php
//bubble sort

$arr = [1,5,9,5,2,6,4,2,8,7,9,2,3,6];

//for unique value with reset index

//print_r(array_values(array_unique($arr)));

$count = count(array_unique($arr));

for ($i=0; $i < $count; $i++) { 
	for ($j=0; $j < $count -1; $j++) { 
		if ($arr[$j] > $arr[$j+1]) {
			$tmp = $arr[$j];
			$arr[$j] = $arr[$j+1];
			$arr[$j +1] = $tmp;
		}
	}
}

print_r($arr);