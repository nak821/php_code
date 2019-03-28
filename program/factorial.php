<?php 
$res = 1;
$num = 5;

if($num > 0){

	for($i=$num ; $i > 1; $i--){
		$res *= $i; 
	}	
	print_r($res);
}else{
	echo "Please enter valid number.";
	exit();
}

?>
