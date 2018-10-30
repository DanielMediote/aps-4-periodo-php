<?php
require_once 'config.php';

$rotas = array(
  '/' => 'view/index.php',
  '/inicio' => 'view/index.php',
  '/cadastro' => 'view/cadastro.php',
  '/teste' => 'view/teste.php'
);

if (in_array(URL,array_keys($rotas))) {
  include_once $rotas[URL];
}else {
  include_once 'view/404.html';
}

?>
