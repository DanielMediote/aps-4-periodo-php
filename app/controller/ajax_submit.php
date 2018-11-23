<?php
require_once '../config.php';
require_once AUTOLOAD;
$estado = new Estado();
$cidade = new Cidade();
$formulario = new Formulario();

$_POST['classe'] = ucfirst(preg_replace("/_\w*/", "", $_POST['classe']));
$_POST['categoria'] = $_POST['classe'];
$_POST['cidade'] = intval($cidade->getTableIdByField('nome', $_POST['cidade_nome']));
$_POST['estado'] = intval($estado->getTableIdByField('uf', $_POST['estado_uf']));
$_POST['dataNasc'] = date("Y/m/d" , strtotime($_POST['dataNasc']));
$date = date('Y/m/d h:m:s', time());
$_POST['dataCadastro'] = $date;
$_POST['foto'] = "null";
$_POST['endereco'] = $_POST['cep'];
$_POST['senha'] = md5($_POST['senha1']);

$formulario->setBean($_POST);
$formulario->submit();

?>
