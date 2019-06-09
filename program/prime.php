<?php
$num = 57;
$flag = 0;
if($num > 2){
for ($i=2; $i < ($num/2+1) ; $i++) { 
	if($num%$i == 0){
		$flag = 1;
		break;
	}
}
}
if($flag==0){
	echo $num." is Prime.";
}else{
	echo $num." is not Prime.";
}

?>