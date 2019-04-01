<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class test{
    public static $a = 1;
    
    public function staticFunction(){
            
        return $this->a;
    }
}

$obj1 = new test();
$obj2 = new test();

$obj1->a = 10;
$obj2->a = 15;

echo $obj1->staticFunction();
echo $obj2->staticFunction();