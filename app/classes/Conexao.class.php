<?php
/**
*
*/
final class Conexao{

  public function open(){
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
      echo "teste";
      echo "Error ==> " . $e;
    }
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $conn;
  }

  public function startTransaction(){
    $conn = self::open();
    $conn->beginTransaction();
    return $conn;
  }

  public function doTransaction($query, $conn){
    try {
      $stmt = $conn->prepare($query);
      $stmt->execute();
    } catch (PDOException $e) {
      echo "Error => ". $e->getMessage();
      $conn->rollBack();
    }
    return $stmt;
  }

  public function commitTransaction($conn){
    $conn->commit();
    return $conn;
  }

}





?>
