
<?php
	function print_num($num){
		if($num == 0){
			exit;
		}else{
			print("Narendra/n");
			$num--;
			print_num($num);
		}
	}

	//print_num(5);


//Q. input: my name is narendra
//	Output : narendra is name my

	function reverseString($str){
 		$tmp ="";
		for($i=0; $i < strlen($str); $i++) {
			$tmp .= $str[$i];
			if($str[$i] == " "){
				$data[] = $tmp;
				$tmp="";
			}
		}

		for($j = count($data) - 1 ; $j >=0 ; $j--){
			echo $data[$j];
		}

	}

	reverseString("My name is narendra kumar");

?>
