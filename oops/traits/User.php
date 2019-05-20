<?php
include_once "Logger.php";
class User{
 use Logger;
 function __construct() {
 $this->log("A new user created");
 }
}

$obj = new User();
?>