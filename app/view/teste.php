<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Teste</title>
</head>
<body>
  <?php
  require_once AUTOLOAD;
  $e = "aluno_id_pessoa";
  if (preg_replace("/\w+_/", "", $e) == "pessoa") {
    print("true");
  }else {
    echo "false";
  }
  ?>
</body>
</html>
