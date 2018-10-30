<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registro</title>
  <?php require_once LINKS; ?>
</head>
<body class="uk-background-muted">

  <?php
  require_once AUTOLOAD;
  require_once ROOT.'/html/navbar.php';
  $cadastroRoutes = array(
    'aluno' => ROOT.'/html/aluno.php',
    'professor' => ROOT. '/html/professor.php',
    'supervisor' => ROOT.'/html/supervisor.php',
    'empresa' => ROOT.'/html/empresa.php',
    'faculdade' => ROOT.'/html/faculdade.php',
  ); ?>
  <ul class="uk-flex-center uk-margin-medium-top" uk-switcher="animation: uk-animation-slide-left" uk-tab>
    <?php foreach ($cadastroRoutes as $key => $value): ?>
      <li class="" ><a id="<?=$key."_target"?>" href="#"><?=$key?></a></li>
    <?php endforeach; ?>
  </ul>
  <ul class="uk-switcher uk-margin">
    <?php foreach ($cadastroRoutes as $key => $value): ?>
      <li>
        <div class="uk-container uk-container-expand uk-margin-medium">
          <form action="" method="post">
            <?php require_once $value;?>
            <div class="uk-margin-medium uk-container-large uk-align-right">
              <button class="uk-button uk-button-danger" type="reset" name="button">Limpar Dados</button>
              <button class="uk-button uk-button-primary" type="button" name="button">Enviar Dados</button>
            </div>
          </form>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
