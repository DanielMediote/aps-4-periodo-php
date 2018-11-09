<?php

/**
*
*/
class FormularioSubmit{

  protected $bean = array();

  public function __construct($dados){
    $this->bean = $dados;
  }

  public function verificarSenhas($senha1, $senha2){
    $senha = ($senha1 == $senha2) ? true : false;
    return $senha;
  }

  public function submit(){
    $class = new $this->bean['classe']();
    $endereco = new Endereco();

    $endereco->setAll($this->bean);
    $endereco->insert();

    if (in_array($this->bean['classe'], array('Aluno', 'Professor', 'Supervisor'))) {
      $pessoa = new Pessoa();

      $pessoa->setAll($this->bean);
      $pessoa->insert();
      $id_pes = $pessoa->getTableIdByField('pes_usuario', $pessoa->get('usuario'));
      $class->setAll($this->bean);
      $class->insert();
      $table_name = lcfirst($this->bean['classe'])."_";
      $id_class = $class->getTableIdByField($table_name."cpf" , $class->get('cpf'));
      $class->updatePessoaId($id_pes, $id_class);
    } else {
      $class->setAll($this->dados);
      $class->insert();
    }
  }

}
