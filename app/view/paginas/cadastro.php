<?php require_once '../../config.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cadastro</title>
  <?php require_once ROOT."/plugins.php"; ?>
</head>
<body>
  <?php require_once NAVBAR;?>
  <div class="container is-widescreen" style="background-color: white-ter;">
    <form class="section is-medium" action="<?=HOST?>" method="post">
      <h2 class="title">Informações do Estágiario</h2>
      <div class="columns">
        <div class="column">
          <label class="label" for="">Nome</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-primary" type="text" name="" value="">
            <span class="icon is-left">
              <i class="fas fa-user"></i>
            </span>
          </div>
        </div>
        <div class="column">
          <label class="label" for="">Sobrenome</label>
          <div class="control has-icon">
            <input class="input is-primary" type="text" name="" value="">
            <span class="icon is-left">
              <i class="fas fa-user"></i>
            </span>
          </div>
        </div>
        <div class="column"></div>
      </div>
      <div class="columns">
        <div class="column">
          <label class="label" for="">E-mail</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-primary" type="email" name="" value="">
            <span class="icon is-left">
              <i class="fas fa-envelope"></i>
            </span>
          </div>
        </div>
        <div class="column"></div>
      </div>
      <div class="columns">
        <div class="column">
          <label class="label" for="">Usuário</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-primary" type="text" name="" value="">
            <span class="icon is-left">
              <i class="fas fa-user-circle "></i>
            </span>
          </div>
        </div>
        <div class="column">
          <label class="label" for="">Senha</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-primary" type="password" name="" value="">
            <span class="icon is-left">
              <i class="fas fa-key"></i>
            </span>
          </div>
        </div>
        <div class="column">
          <label class="label" for="">Repetir Senha</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-primary" type="password" name="" value="">
            <span class="icon is-left">
              <i class="fas fa-key"></i>
            </span>
          </div>
        </div>
        <div class="column"></div>
      </div>
      <div class="columns">
        <div class="column">
          <label class="label" for="">Telefone</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-primary" type="text" name="" value="">
            <span class="icon is-left">
              <i class="fas fa-phone"></i>
            </span>
          </div>
        </div>
        <div class="column">
          <label class="label" for="">CPF</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-primary" type="text" name="" value="">
            <span class="icon is-left">
              <i class="fas fa-address-card"></i>
            </span>
          </div>
        </div>
        <div class="column">
          <label class="label" for="">RA/Acadêmico</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-primary" type="text" name="" value="">
            <span class="icon is-left">
              <i class="fas fa-address-card"></i>
            </span>
          </div>
        </div>
        <div class="column">
          <label class="label" for="">Genero</label>
          <div class="field">
            <div class="control">
              <div class="select is-primary">
                <select>
                  <option selected default hidden>Selecionar</option>
                  <option>Masculino</option>
                  <option>Femenino</option>
                  <option>Outro</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="column"></div>
      </div>
      <div class="columns">
        <div class="column">
          <label class="label" for="">CEP</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-primary" type="text" name="" value="">
            <span class="icon is-left">
              <i class="fas fa-map-marker-alt "></i>
            </span>
          </div>
        </div>
        <div class="column"></div>
        <div class="column"></div>
      </div>
      <div class="columns">
        <div class="column">
          <label class="label" for="">Estado</label>
          <div class="field">
            <div class="control">
              <div class="select is-primary">
                <select>
                  <option selected default hidden>Selecionar</option>
                  <option>With options</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <label class="label" for="">Cidade</label>
          <div class="field">
            <div class="control">
              <div class="select is-primary">
                <select>
                  <option selected default hidden>Cidades</option>
                  <option>With options</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="column"></div>
        <div class="column"></div>
      </div>
      <div class="columns">
        <div class="column">
          <label class="checkbox">
            <input id="termos" type="checkbox">
            I agree to the <a href="#">terms and conditions</a>
          </label>
        </div>
        <p class="buttons">
          <a id="enviar" class="button is-success is-static" onclick="cadastrar()">
            <span class="icon is-small">
              <i class="fas fa-share-square "></i>
            </span>
            <span>Salvar e enviar</span>
          </a>
        </p>
      </div>
    </form>
  </body>
  </html>
