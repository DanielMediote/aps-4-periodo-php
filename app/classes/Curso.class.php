<?php
/**
 *
 */
class Curso extends Crud
{
  protected $tabela = 'CURSO';
  protected $id;
  protected $nome;
  protected $faculdade_id;
  protected $periodos;

  public function getCursoByFaculdadeId($id){
    $query = "SELECT * FROM CURSO WHERE curso_faculdade_id = {$id};";
    $conn = Conexao::startTransaction();
    $stmt = Conexao::doTransaction($query, $conn);
    Conexao::commitTransaction($conn);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getCursoPeriodos($curso_id){
    $query = "SELECT curso_periodos FROM CURSO WHERE curso_id = {$curso_id};";
    // var_dump($query);
    $conn = Conexao::startTransaction();
    $stmt = Conexao::doTransaction($query, $conn);
    Conexao::commitTransaction($conn);
    return $stmt->fetch(PDO::FETCH_ASSOC)['curso_periodos'];
  }
}


 ?>
