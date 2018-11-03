<?php


/**
*
*/
class FormularioSubmit{

  protected $dados = array();

  function __contruct(){

  }

  public function verificar_senha($senha1, $senha2){
    $senha = ($senha1 == $senha2)? True : False;
    return $senha;
  }

  public function setDados($dados){
    $estado = new Estado();
    $cidade = new Cidade();
    foreach ($dados as $key => $value) {
      $this->dados[$key] = $value;
    }
    $this->dados['senha'] = $dados['senha2'];
    $date = date('m/d/Y', time());
    $this->dados['dataCadastro'] = $date;
    $this->dados['foto'] = "null";
    $this->dados['endereco'] = $dados['cep'];
    $this->dados['cidade'] = $cidade->getTableIdByField('nome', $this->dados['cidade_nome']);
    $this->dados['estado'] = $estado->getTableIdByField('uf', $this->dados['estado_uf']);
  }

  public function submit(){
    $class = new $this->dados['classe']();
    $endereco = new Endereco();
    $conn = Conexao::startTransaction();


    $endereco->setAll($this->dados);
    $stmt = Conexao::doTransaction($endereco->insert(), $conn);

    if (in_array($this->dados['classe'], array('Aluno', 'Professor', 'Supervisor'))) {
      $pessoa = new Pessoa();

      $pessoa->setAll($this->dados);
      $stmt = Conexao::doTransaction($pessoa->insert(), $conn);

      $class->setAll($this->dados);
      $stmt = Conexao::doTransaction($class->insert(), $conn);

    }else {
      $class->setAll($this->dados);
      $class->show_object();
      $stmt = Conexao::doTransaction($class->insert(), $conn);
    }
    Conexao::commitTransaction($conn);
  }

}



?>
