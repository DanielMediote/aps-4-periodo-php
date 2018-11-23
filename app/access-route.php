<?php
require_once 'config.php';
require_once AUTOLOAD;
$rotas = array(
  '/' => 'view/index.php',
  '/inicio' => 'view/index.php',
  '/cadastro' => 'view/cadastro.php',
  '/teste' => 'view/teste.php',
  '/login' => 'view/login.php',
  '/perfil' => 'view/perfil.php'
);

if (in_array(URL,array_keys($rotas))) {
  include_once $rotas[URL];
}else {
  include_once 'view/error/404.html';
}

?>
