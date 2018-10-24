<?php
/**
 * Classe Estado
 * 
 */
class Estado extends Crud{
  /** 
   * @var string $tabela Tabela do Estado 
   * @var int $id Código do Estado 
   * @var string $nome Nome do Estado 
   * @var string $regiao Região do Estado 
   * 
  */
  protected $var = null;
  protected $tabela = 'ESTADO';
  protected $id;
  protected $nome;
  protected $uf;
  protected $regiao;

  function __construct(){
  }

  /**
   * 
   * @example $objeto->readPerRegion('Norte');
   * @param string $regiao
   * @return array Retorna um array de estados.
   **/
  public function readPerRegion($regiao){
    $query = "SELECT * FROM {$this->tabela} WHERE regiao = '".$regiao."';";
    $stmt = Conexao::doTransaction($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}


?>
