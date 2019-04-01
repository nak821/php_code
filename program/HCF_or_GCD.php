<?php

$no1 = 15;
$no2 = 20;

function gcd($no1, $no2) {
    if ($no1 == 0) {
        return $no2;
    }
    return gcd($no2 % $no1, $no1);
}

function findHCF($arr, $no) {
    $result = $arr[0];
    for ($i = 1; $i < $no; $i++) {

        $result = gcd($arr[$i], $result);
    }
    return $result;
}

$arr = array(5, 25, 45);
$no = sizeof($arr);
echo findHCF($arr, $no);
