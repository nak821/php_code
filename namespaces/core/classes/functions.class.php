<?php

namespace core\classes ;

class functions{

  public static function print_hello(){
    echo "This is the print_hello function<br />";
  }

  public static function catch_errors($errors) {

    echo("Error!\n" . $errors -> getMessage());
    die();
    //throw new Exception($errors -> getMessage());

  }

}
