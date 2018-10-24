<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <title>Estágio</title>
  <?php require_once LINKS;?>
</head>
<body>
  <?php require_once NAVBAR;?>
  <?php
  require_once AUTOLOAD;
  $estado = new Estado();
  $estado->read
  ?>
</body>
</html>
