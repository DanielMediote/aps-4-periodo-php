<?php

/**
* undocumented class
*/
class Atividade extends Crud
{
    protected $tabela = "ATIVIDADE";
    protected $nome;
    protected $descricao;
    protected $id_estagiario;
    protected $id_curso;
    protected $id_professor;
    protected $horasComplementares;
    protected $dataInicio;
    protected $dataTermino;
    protected $status;

    /**
    * undocumented function summary
    *
    * Undocumented function long description
    *
    * @param Type $var Description
    * @return type
    * @throws conditon
    **/
    public function listarAtividades($id_estagiario){
        $query = "SELECT
        ATIVIDADE.atividade_id as codigo,
        ATIVIDADE.atividade_nome as atividade,
        PESSOA.pes_nome as professor,
        ATIVIDADE.atividade_horasComplementares as horas,
        ATIVIDADE.atividade_dataInicio as data_inicio,
        ATIVIDADE.atividade_dataTermino as data_termino
        FROM ATIVIDADE
        JOIN PROFESSOR ON PROFESSOR.prof_id = ATIVIDADE.atividade_id_professor
        JOIN PESSOA ON PESSOA.pes_id = PROFESSOR.prof_id_pessoa
        AND ATIVIDADE.atividade_id_estagiario = {$id_estagiario};
        ";
        Conexao::startTransaction();
        $stmt = Conexao::doTransaction($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
    * undocumented function summary
    *
    * Undocumented function long description
    *
    * @param type var Description
    * @return return type
    */
    public function listarAtividadesRealizadas($id){
        $query = "";
    }


}



?>
