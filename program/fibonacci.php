<?php

$a = -1;
$b = 1;

for ($i=1; $i <= 10; $i++) { 
	echo $tmp = $a+$b.", ";
	$a = $b;
	$b = $tmp;
}