<?php

namespace core\classes ;
use PDO ;
class MySQLDatabase{
  // Class attributes
 private $host_name = "localhost";
  private $database_name = "namespace";
  private $database_username = "root";
  private $database_password = "";
  private $is_connected;
  private $connection;
  private $statement ;

  // construct
  public function __construct() {
    $this->open_connection();
  }// End of construct

  // connection method
  public function open_connection() {

    try {
      $this->is_connected = TRUE ;
      // PDO Connection
      $this->connection = new  \PDO("mysql:host=".$this->host_name.";dbname=".$this->database_name.";charset=utf8",$this->database_username,$this->database_password);
      // Error reporting
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES,FALSE);

    } catch(PDOException $errors) {

      $this->is_connected = FALSE ;

      self::catch_errors($errors);
    }


  }// End of open connection method

  // Get connection method
  public function connection(){
    return $this->connection ;
  }

  // Close connection method
  public function close_connection() {

    $this->connection = null;
    if(isset($this->connection)){
      mysqli_close($this->connection);
      unset($this->connection);
    }

  }// End of close connection method

  private static function catch_errors($errors) {
    echo("<h4><p>" . $errors -> getMessage() . "</p></h4>");
    die();
  }
  // query method
  public function query($sql){
    return $this->connection->prepare($sql);
  }

  public function lastInsertId(){
    return $this->connection->lastInsertId();
  }
     public function print_message(){
    echo "MySQLDatabse is working<br />";
  }
}
