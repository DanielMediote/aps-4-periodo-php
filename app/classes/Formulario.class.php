<?php

/**
*
*/
class Formulario{

  protected $bean = array();

  public function setBean($dados)
  {
    $this->bean = $dados;
  }

  public function submit(){
    $class = new $this->bean['classe']();
    $endereco = new Endereco();

    $endereco->setAll($this->bean);
    $endereco->insert();

    if (in_array($this->bean['classe'], array('Estagiario', 'Professor'))) {
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
      $class->setAll($this->bean);
      $class->show_object();
      $class->insert();
    }
  }

}
