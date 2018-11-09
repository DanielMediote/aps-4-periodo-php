<?php
require_once '../config.php';
require_once AUTOLOAD;
$_POST['classe'] = ucfirst(preg_replace("/_\w*/", "", $_POST['classe']));
Conexao::startTransaction();
$estado = new Estado();
$cidade = new Cidade();
$_POST['cidade'] = intval($cidade->getTableIdByField('nome', $_POST['cidade_nome']));
$_POST['estado'] = intval($estado->getTableIdByField('uf', $_POST['estado_uf']));
$_POST['dataNasc'] = date("Y/m/d" , strtotime($_POST['dataNasc']));
$date = date('Y/m/d h:m:s', time());
$_POST['dataCadastro'] = $date;
$_POST['foto'] = "null";
$_POST['endereco'] = $_POST['cep'];
$_POST['senha'] = md5($_POST['senha1']);

$formulario = new FormularioSubmit($_POST);
$formulario->submit();

?>
