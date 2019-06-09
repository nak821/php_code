<?php 
/*
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
*/
// Using Recursion

function foctorial($n){
    
    if($n >= 1){
        
        return $n*foctorial($n-1);
    }else{
        return 1;
    }
    
}

echo foctorial(5);
?>
