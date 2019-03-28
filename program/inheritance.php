<?php
	/**
	* 
	*/
	class abc
	{
		
		function __construct()
		{
			# code...
		}

		static function parentFuct(){
			echo "in parent class";
		}
	}

	class cdf extends abc
	{
		
		function __construct()
		{
			self::parentFuct();
		}

		
	}

	$obj = new cdf();

?>