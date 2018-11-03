<?php
/**
 *
 */
class Endereco extends Crud
{
  protected $tabela = "ENDERECO";
  protected $id;
  protected $cep;
  protected $estado;
  protected $cidade;
  protected $bairro;
  protected $rua;

  function __construct(){

  }

  public function getEnderecoIdByCep($cep){
    $colunasBanco = $this->getTableFields();
    $query = "SELECT {$colunasBanco[0]} FROM ENDERECO WHERE $colunasBanco[1] = '{$cep}';";
    echo $query."\n";
    $conn = Conexao::open();
    $conn = Conexao::startTransaction($conn);
    $stmt = Conexao::doTransaction($query, $conn);
    $conn = Conexao::commitTransaction($conn);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}



 ?>
