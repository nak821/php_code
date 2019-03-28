<?php
namespace core\classes ;
class User {

    public $namespace_user_id ;
    public $namespace_user_name ;

    public function select_all_users(){
        global $database ;
        try{
        $statement = $database->query("SELECT * FROM `user`") ;
        $statement->execute();
        return $statement ;
        }catch(PDOException $errors){
            functions::catch_errors($errors);
        }
    }

    public function print_hello(){
        echo __METHOD__ ;
    }
}

$user = new User();
$user->print_hello();
