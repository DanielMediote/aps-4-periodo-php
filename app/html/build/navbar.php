<nav id="navbar" class="uk-navbar-container" uk-navbar>
  <div class="uk-navbar-left">
    <div class="uk-navbar-item">
      <a href="/inicio" class="uk-button">Ínicio</a>
      <?php if ($_SESSION['status']): ?>
      <a href="/perfil" class="uk-button">Perfil</a>
      <?php endif;?>
      </div>
    </div>
  </div>
  <div class="uk-navbar-right">
    <?php if ($_SESSION['status']): ?>
      <div class="uk-navbar-item">
        <div class="uk-grid">
          <a class="uk-button uk-text-meta" href="/perfil">
          <span uk-icon="icon: user" class="uk-margin-right"></span>
          <?=$_SESSION['pes_nome']." ".$_SESSION['pes_sobrenome']?></a>
        </div>
        <button class="uk-button uk-button-primary" name="encerrar_sessao">
          <i uk-icon="icon: sign-out"></i>
        </button>
      </div>
    <?php else: ?>
      <div class="uk-navbar-item">
        <a href="/cadastro" class="uk-button">Sing up</a>
      </div>
      <div class="uk-navbar-item">
        <a class="uk-button uk-button-primary" href="/login">Log In</a>
      </div>
    <?php endif;?>
  </div>
</nav>
