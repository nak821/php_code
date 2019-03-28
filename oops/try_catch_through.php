<?php
/**
 * Narendra kumar
 */
class Try_Catch
{
	public $a = 1;

	function __construct()
	{
		# code...
	}

	function methodA($param){
		if ($param < 18) {
			throw new Exception("Age must be gretter than 18", 1);
		}else{
			throw new Exception("Age is less than 18", 1);
		}

	}

	function callMethod(){
		try {
			$this->methodA(17);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}

$obj = new Try_Catch();
//$obj->methodA();
$obj->callMethod();