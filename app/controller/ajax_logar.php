<?php
require_once '../config.php';
require_once AUTOLOAD;
$pes = new Pessoa();
Conexao::startTransaction();
$dataBean = $pes->logarPessoa($_POST['usuario'], $_POST['senha']);
var_dump($dataBean);
if (count($dataBean) == 0) {
  echo "False";
}else {
  Sessao::sessionSetGlobals($dataBean);
  echo "True";
}
?>
