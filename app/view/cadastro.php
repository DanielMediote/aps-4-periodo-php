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
  require_once ROOT.'/html/build/navbar.php';
  $faculdade = new Faculdade();
  $curso = new Curso();
  $empresa = new Empresa();
  $rotas = array(
    'Estagiario' => ROOT.'/html/estagiario.php',
    'professor' => ROOT. '/html/professor.php',
    'empresa' => ROOT.'/html/empresa.php',
    'faculdade' => ROOT.'/html/faculdade.php',
  );
  ?>
  <ul class="uk-flex-center uk-margin-medium-top" uk-switcher="animation: uk-animation-slide-left" uk-tab>
    <?php foreach ($rotas as $chave => $path): ?>
      <li class="" onclick="form_clear()"><a id="<?=$chave."_target"?>" href="#"><?=$chave?></a></li>
    <?php endforeach; ?>
  </ul>
  <ul class="uk-switcher uk-margin">
    <?php foreach ($rotas as $chave => $path):?>
      <li>
        <div class="uk-container uk-container-small">
          <form id="<?=$chave?>_form" name="<?=$chave?>_form" class="uk-form formulario" action="" method="post">
            <?php require_once $path;?>
            <div class="uk-margin-medium uk-container-large uk-align-left">
              <input class="uk-checkbox" type="checkbox" name="termos" value="">
              <span>Li e Concordo com os <a>Termos de Uso</a>.</span>
            </div>
            <div class="uk-margin-medium uk-container uk-align-right">
              <button class="uk-button uk-button-danger" type="reset" name="reset_date">Limpar Dados</button>
              <button class="uk-button uk-disabled" type="button" name="btn_enviar">Enviar Dados</button>
            </div>
          </form>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
