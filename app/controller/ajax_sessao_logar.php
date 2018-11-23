<?php
require_once '../config.php';
require_once AUTOLOAD;
$pes = new Pessoa();
Conexao::startTransaction();
$dataBean = $pes->logarPessoa($_POST['usuario'], md5($_POST['senha']));

foreach ($dataBean as $key => $value) {
    print($key. " = ".$value."\n");
}

if (count($dataBean) == 0) {
  echo "False";
}else {
  Sessao::sessionSetGlobals($dataBean);
  echo "True";
}
?>
