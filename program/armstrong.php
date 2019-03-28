<?php 
$res = 0;
$tempval = $num = 407;

do{
	$remainder = $num % 10;
	$num = (int)($num/10);

	$res += pow($remainder, 3);


} while ( $num > 0);


if ($tempval == $res) {
	echo "Number is an armstrong number.";
}else{
	echo "Number is not an armstrong number.";
}
?>