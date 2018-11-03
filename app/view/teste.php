<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Teste</title>
</head>
<body>
  <?php
  require_once AUTOLOAD;
  $fac = new Faculdade();
  $fac->insert($conn);
  // foreach ($fac->readAll() as $key => $value) {
  //   print("{$value['faculdade_nome']}");
  // }
  ?>
</body>
</html>
