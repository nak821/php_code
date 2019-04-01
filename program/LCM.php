<?php

// program to find LCM of two number
class LCM {

    public $input_array = array();
    
    function findTwoNoLCM($no1, $no2) {
        $max = $no1 > $no2 ? $no1 : $no2;

        while (1) {
            if ($max % $no1 == 0 && $max % $no2 == 0) {
                echo "LCM of $no1 AND $no2 = $max";
                break;
            }
            $max = $max + 1;
        }
    }
    
    function findArrayLCM(){
        
    }

}

$obj = new LCM();
$obj->findTwoNoLCM($no1, $no2);


$obj->input_array=array(2,5,7,9);

$obj->findArrayLCM();


