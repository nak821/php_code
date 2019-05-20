<?php
error_reporting(E_ALL);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class test{
    public static $a = 10;
    
    public static function staticFunction(){
            
        return self::$a;
    }
}

class test2{
    
    public function staticFunction1(){
            test::$a= 15;
        return test::staticFunction();
    }
    
    
}

//$obj1 = new test();
$obj2 = new test2();
//test::$a = 10;
//echo test::staticFunction();
//$obj2->a = 15;

//echo $obj1->staticFunction();
echo $obj2->staticFunction1();