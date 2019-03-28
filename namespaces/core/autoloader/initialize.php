<?php
require_once ("autoloader.php");

defined("SITE_ROOT") ? NULL  :
	define("SITE_ROOT","C:" .  DIRECTORY_SEPARATOR . "wamp64_01"  . DIRECTORY_SEPARATOR . "www"  . DIRECTORY_SEPARATOR . "namespaces");

$directories = array(
       SITE_ROOT . DIRECTORY_SEPARATOR . "core" . DIRECTORY_SEPARATOR . "classes",
	    SITE_ROOT . DIRECTORY_SEPARATOR . "core" . DIRECTORY_SEPARATOR . "otherclasses"
);
var_dump($directories);
core\autoloader\AutoLoader::init(
        array(
               SITE_ROOT . DIRECTORY_SEPARATOR . "core" . DIRECTORY_SEPARATOR . "classes"
        )
);


$database = new core\classes\MySQLDatabase();
$user = new  core\classes\User();
$test = new  core\otherClasses\Test() ;
$test->print_message();
$exam->print_hello();
// echo php_uname();
// echo PHP_OS;
