<?php
//Write a PHP program to print sum of digits.
$num = 123445;
$sum = 0;
$tmp = 0;
//using for Loop


for ($i=0; $i < strlen($num); $i++) { 
	//$tmp = ;
	$num = $num / 10;
	$sum += $num%10;
}

echo $sum;


/*
// using recurssion

function sumOfDigit($num){
	if($num == 0){
		return $sum;
	}
	$sum += $num%10;
	return sumOfDigit($num/10);
}

sumOfDigit($num);*/

?>