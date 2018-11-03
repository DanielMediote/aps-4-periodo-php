<?php
require_once '../config.php';
require_once AUTOLOAD;
$server_response;
$formulario = new FormularioSubmit();
foreach ($_POST as $key => $value) {
  if (!in_array($key, array('telefone1', 'dataNasc', 'email'))) {
    if ($value == null) {
      $server_response = "FALSE";
    }else {
      if($formulario->verificar_senha($_POST['senha1'], $_POST['senha2'])){
        $server_response = "TRUE";
        $_POST['classe'] = ucfirst(preg_replace("/_\w*/", "", $_POST['classe']));
        $formulario->setDados($_POST);
        $formulario->submit();
        echo $server_response;
      }else {
        $server_response = "FALSE";
        echo $server_response;
      }
    }
  }
}



?>
