<?php

class Estagiario extends Pessoa{

  protected $tabela = "ESTAGIARIO";
  protected $id;
  protected $id_pessoa;
  protected $cpf;
  protected $registroAcademico;
  protected $faculdade;

  public function mostrarEstagiarioDados($id_estagiario){
    $query = "
    SELECT
    ESTAGIARIO.estagiario_id as codigo,
    ESTAGIARIO.estagiario_registroAcademico as ra,
    ESTAGIARIO.estagiario_cpf as cpf,
    PESSOA.pes_nome as nome,
    PESSOA.pes_email as email,
    PESSOA.pes_dataCadastro as dataCad,
    PESSOA.pes_sobrenome as sobrenome,
    PESSOA.pes_telefone1 as tel1,
    PESSOA.pes_telefone2 as tel2,
    PESSOA.pes_usuario as user,
    CURSO.curso_nome as curso,
    FACULDADE.faculdade_nome as faculdade,
    FACULDADE.faculdade_fantasia as fantasia
    FROM ESTAGIARIO
    JOIN CURSO ON CURSO.curso_faculdade_id = estagiario_id_faculdade
    JOIN FACULDADE ON FACULDADE.faculdade_id = curso_faculdade_id
    JOIN PESSOA ON PESSOA.pes_id = ESTAGIARIO.estagiario_id_pessoa
    AND ESTAGIARIO.estagiario_id = {$id_estagiario};";
    Conexao::startTransaction();
    $stmt = Conexao::doTransaction($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}
?>
