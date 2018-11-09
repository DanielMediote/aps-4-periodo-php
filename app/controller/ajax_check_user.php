<?php
require_once '../config.php';
require_once AUTOLOAD;
$user = $_POST['usuario'];
$pes = new Pessoa();
$pes->set('usuario', $user);
if ($pes->checkUsuarioExists()) {
  echo true;
}else {
  echo false;
}

?>
