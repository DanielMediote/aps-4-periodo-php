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
    $stmt = Conexao::doTransaction($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getCursoPeriodos($curso_id){
    $query = "SELECT * FROM CURSO WHERE curso_id = {$curso_id};";
    echo $query;
    $stmt = Conexao::doTransaction($query);
    return $stmt->fetch(PDO::FETCH_ASSOC)['curso_periodos'];
  }
}


 ?>
