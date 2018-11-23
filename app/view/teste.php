<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Teste</title>
</head>
<body>
  <?php
  require_once AUTOLOAD;
  $pes = new Pessoa();
  Conexao::startTransaction();
  var_dump($pes->readAll());
  
  ?>
</body>
</html>
