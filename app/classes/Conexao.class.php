<?php
/**
*
*/
final class Conexao{

  private static $connection;

  private static function open(){
    define('host', 'database');
    define('database', 'aps_estagio');
    define('port', '3306');
    define('data', 'aps_estagio');
    define('user', 'root');
    define('pass', 'root');
    try {
      $conn = new PDO("mysql:host=".host.";port=".port.";dbname=".data, user, pass,
      array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    } catch (PDOException $e) {
      echo "Error ==> " . $e;
    }
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    self::$connection = $conn;
  }

  public function startTransaction(){
    self::open();
  }

  public function doTransaction($query){
    self::$connection->beginTransaction();
    try {
      $stmt = self::$connection->prepare($query);
      $stmt->execute();
      self::$connection->commit();
    } catch (PDOException $e) {
      echo "Error => ". $e->getMessage();
      self::$connection->rollBack();
    }
    return $stmt;
  }

}





?>
