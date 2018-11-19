<?php

/**
* Classe Abstrata Crud.
* Create, Read, Update e Delete datas.
*/
abstract class Crud{

  /**
  * Retorna dados de uma tabela.
  * @return array
  * @category Read
  */
  public function readAll(){
    $query = "SELECT * FROM {$this->tabela}";
    $stmt = Conexao::doTransaction($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  /**
  * Retorna dados de uma tabela, de acordo com id inserido.
  * @param int $id ID da Tabela
  * @return array
  * @category Read
  */
  public function readOne($id){
    $tableFields = $this->getTableFields();
    $query = "SELECT * FROM {$this->tabela} WHERE " . $tableFields[0] . " = {$id}";
    $stmt = Conexao::doTransaction($query);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  /**
  * undocumented function summary
  *
  * Undocumented function long description
  *
  * @param Type $var Description
  * @return type
  * @throws conditon
  **/
  public function insert(){
    $query = "INSERT INTO {$this->tabela}(";
    $colunasClasse = $this->getAll();
    $colunasBanco = $this->getTableFields();
    $regex = "/\w+_/";
    for ($i = 0; $i < sizeof($colunasBanco); $i++) {
      if (in_array(preg_replace($regex, "", $colunasBanco[$i]), array('id', 'pessoa'))) {
        continue;
      }

      $query .= $colunasBanco[$i];
      $query .= ($colunasBanco[$i] == end($colunasBanco)) ? "" : ", ";
    }
    $query .= ") VALUES(";
    foreach ($colunasBanco as $key => $value) {
      $value = preg_replace($regex, "", $value);
      if (in_array($value, array('id', 'pessoa'))) {
        continue;
      }

      $type = gettype($colunasClasse[$value]);
      $query .= ($type == 'string') ? "'{$colunasClasse[$value]}'" : $colunasClasse[$value];
      $query .= ($key != end(array_keys($colunasBanco))) ? ", " : "";
    }
    $query .= ");";
    // print("\n$query\n");
    $stmt = Conexao::doTransaction($query);
  }

  public function updateAll(){
    $query = "UPDATE {$this->tabela} SET ";
    $colunasClasse = $this->getAll();
    $regex = "/\w+_/";
    foreach ($colunasClasse as $key => $value) {
      if (in_array(preg_replace($regex, "", $key), array('tabela', 'id', 'pessoa'))) continue;
      if ($key == "senha") continue;
      $type = gettype($value);
      $query .= "{$key} = ";
      $query .= ($type == 'string') ? "'{$value}'" : "{$value}";
      $query .= ($key != end(array_keys($colunasClasse))) ? ", " : " ";
    }
    $query .= ";";
    var_dump($query);
    // Conexao::doTransaction($query);
  }

  public function updateOne($rowField, $rowValue, $row, $value){
    $query = "UPDATE {$this->tabela} SET {$rowField} = ";
    $rowValueType = gettype($rowValue);
    $query .= ($rowValueType == 'string') ? "'{$rowValue}'" : "{$rowValue}";
    $query .= " WHERE {$row} = ";
    $valueType = gettype($value);
    $query .= ($valueType == 'string') ? "'{$value}'" : "{$value}";
    $query .= ";";
    Conexao::doTransaction($query);
  }

  public function checkExistsData($field, $value){
    $query = "SELECT * FROM {$this->tabela} WHERE {$field} = '{$value}';";
    $stmt = Conexao::doTransaction($query);
    return $stmt->fetchColumn();
  }

  public function getTableDetalhes(){
    $query = "DESCRIBE {$this->tabela};";
    $stmt = Conexao::doTransaction($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getTableIdByField($field, $value){
    $colunasDB = $this->getTableFields();
    $query = "SELECT {$colunasDB[0]} FROM {$this->tabela} WHERE {$field} = ";
    $type = gettype($value);
    $query .= ($type == 'string') ? "'{$value}'" : "{$value};";
    // var_dump($query."\n");
    $stmt = Conexao::doTransaction($query);
    return $stmt->fetch(PDO::FETCH_ASSOC)[$colunasDB[0]];
  }

  public function getTableFields(){
    $colunasBanco = $this->getTableDetalhes();
    $temp = "";
    $fields;
    $i = 0;
    foreach ($colunasBanco as $array) {
      $fields[$i] = "{$array['Field']}";
      $i++;
    }
    return $fields;
  }

  public function get($atributo){
    if (isset($atributo)) {
      return $this->$atributo;
    } else {
      return null;
    }
  }

  public function getAll(){
    return get_object_vars($this);
  }

  public function set($atributo, $valor){
    if (isset($atributo)) {
      return $this->$atributo = $valor;
    } else {
      return $this->$atributo = null;
    }
  }

  public function setAll($dados){
    foreach ($this->getAll() as $atributo => $value) {
      if (in_array($atributo, array('tabela', 'id', 'id_pessoa'))) {
        continue;
      }

      $this->set($atributo, $dados[$atributo]);
    }
  }

  public function show_object(){
    foreach ($this->getAll() as $key => $value) {
      print("{$key} = {$value}\n");
    }
  }

}
?>
