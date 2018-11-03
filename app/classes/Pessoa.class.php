<?php

class Pessoa extends Crud
{
  protected $tabela = "PESSOA";
  protected $id;
  protected $nome;
  protected $sobrenome;
  protected $email;
  protected $usuario;
  protected $senha;
  protected $genero;
  protected $dataNasc;
  protected $cep;
  protected $foto;
  protected $telefone1;
  protected $telefone2;
  protected $dataCadastro;

  function __construct(){
    // echo "New ".get_class($this)."<br>";
  }
}


 ?>
