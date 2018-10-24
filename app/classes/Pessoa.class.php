<?php

class Pessoa extends Crud
{
  protected $tabela = "PESSOA";
  protected $id;
  protected $genero;
  protected $nome;
  protected $estado;
  protected $sobrenome;
  protected $email;
  protected $dataNasc;
  protected $usuario;
  protected $cidade;
  protected $foto;
  protected $senha;
  protected $dataCadastro;

  function __construct()
  {
    echo "New ".get_class($this)."<br>";
  }

}


 ?>
