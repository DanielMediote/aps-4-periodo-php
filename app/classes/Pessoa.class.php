<?php

class Pessoa extends Crud{
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

    /**
    * Verifica se tem um usuario com o mesmo valor no Banco de Dados.
    *
    * Nescessita que a variável $usuario tenha um valor.
    *
    * @return boolean retorna um valor boolean
    * @throws conditon
    **/
    public function checkUsuarioExists(){
        Conexao::startTransaction();
        if ($this->checkExistsData('pes_usuario', $this->usuario)) {
            return true;
        } else {
            return false;
        }
    }

    public function updatePessoaId($id_pessoa, $id_class){
        $colunasBanco = $this->getTableFields();
        foreach ($colunasBanco as $key => $value) {
            if (preg_replace("/\w+_/", "", $value) == "pessoa") {
                $pessoa_id_field = $value;
            }
        }
        $query = "UPDATE {$this->tabela} SET $pessoa_id_field = {$id_pessoa} WHERE
        $colunasBanco[0] = {$id_class};";
        // var_dump($query."\n");
        $stmt = Conexao::doTransaction($query);
    }

    public function logarPessoa($user, $pass){
        $query = "SELECT * FROM PESSOA WHERE pes_usuario = '{$user}' AND pes_senha = '".md5($senha)."';";
        $stmt = Conexao::doTransaction($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
