<?php
require_once '../../config.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Teste</title>
  </head>
  <body>
    <?php
    require_once AUTOLOAD;
    $teste = new Teste();
    $estado = new Estado();
    foreach ($estado->readPerRegion('Centro-Oeste') as $key => $value) {
      echo "[{$value['id']}] = {$value['nome']} <br>";
    }
    ?>
  </body>
</html>
