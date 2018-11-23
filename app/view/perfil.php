<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perfil</title>
  <?php require_once LINKS;?>
</head>

<body>
  <?php require_once ROOT . '/html/build/navbar.php';?>
  <?php
  $atividade = new Atividade();
  $estagiario = new Estagiario();
  $professor = new Professor();
  $estagio = new Estagio();
  ?>
  <div class="uk-margin-large-left">
    <div class="uk-padding-small" uk-grid>
      <ul class="uk-width-1-6 uk-subnav uk-subnav-pill uk-flex uk-flex-column uk-margin-large-right" uk-switcher>
        <li class="active"><a href="#">Meus Dados</a></li>
        <?php if ($_SESSION['pes_categoria'] == "Professor"): ?>
          <li><a href="#atividades-entregues">Atividades Entregues</a></li>
          <li><a href="#atividades-pendentes">Atividades Pendentes</a></li>
        <?php elseif ($_SESSION['pes_categoria'] == "Estagiario"): ?>
          <li><a href="#minhas-atividades">Minhas Atividades</a></li>
          <li><a href="#meus-estagios">Meus Estágios</a></li>
          <li><a href="#horas-realizadas">Horas Realizadas</a></li>
        <?php elseif ($_SESSION['pes_categoria'] == "Supervisor"): ?>
          <li><a href="#cursos">Cursos</a></li>
          <li><a href="#lista-estagiarios">Lista de Estágiarios</a></li>
        <?php endif;?>
        <li><a href="#alterar-dados">Alterar Dados</a></li>
        <li><a href="#documentos">Documentos</a></li>
      </ul>
      <ul class="uk-width-3-4 uk-switcher">
        <li id="tab-dados-perfil">
          <label class="uk-label" for="">Informações do Usuário</label>
          <div class="uk-padding-small" uk-grid>
            <ul class="uk-list">
              <?php $id_est = $estagiario->searchCampoByValor('estagiario_id_pessoa',$_SESSION['pes_id'], 'estagiario_id');?>
              <?php foreach ($estagiario->mostrarEstagiarioDados($id_est) as $row => $tupla): ?>
                  <li>
                    <p class="uk-text-primary">Nome Completo</p>
                    <?=$tupla['nome']?> <?=$tupla['sobrenome']?>
                  </li>
                  <li>
                    <p class="uk-text-primary">Usuario</p>
                    <?=$tupla['user']?>
                  </li>
                  <li>
                    <p class="uk-text-primary">E-mail</p>
                    <?=$tupla['email']?>
                  </li>
                  <li>
                    <p class="uk-text-primary">Telefones</p>
                    <?=$tupla['tel1']?> | <?=$tupla['tel2']?>
                  </li>
                  <li>
                    <p class="uk-text-primary">Curso</p>
                    <?=$tupla['curso']?>
                  </li>
                  <li>
                    <p class="uk-text-primary">Faculdade</p>
                    <?=$tupla['faculdade']?> - <?=$tupla['fantasia']?>
                  </li>
                  <li>
                    <p class="uk-text-primary">Data de Cadastro</p>
                    <?=$tupla['dataCad']?>
                  </li>
                  <li>
                    <p class="uk-text-primary">Usuario</p>
                    <?=$tupla['user']?>
                  </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </li>
        <?php if ($_SESSION['pes_categoria'] == "Professor"): ?>
          <li id="tab-atividades-entregues">
            <div class="uk-padding-small" uk-grid>

            </div>
          </li>
          <li id="tab-atividades-pendentes">
            <div class="uk-padding-small" uk-grid>

            </div>
          </li>
        <?php elseif ($_SESSION['pes_categoria'] == "Estagiario"): ?>
          <li id="tab-minhas-atividades">
            <div class="uk-padding-small uk-background-muted uk-dark" uk-grid>
              <div class="uk-overflow-auto">
                <table class="uk-table uk-table-striped uk-table-divider">
                  <thead>
                    <tr>
                      <th class="uk-width-small">Código</th>
                      <th class="uk-width-large">Atividade</th>
                      <th class="uk-width-large">Professor</th>
                      <th class="uk-width-large">Horas Comp.</th>
                      <th class="uk-width-large">Data de Início</th>
                      <th class="uk-width-large">Data de Entrega</th>
                      <th class="uk-width-medium">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($atividade->listarAtividades($id_est) as $row => $tupla): ?>
                      <tr>
                        <td><?=$tupla['codigo']?></td>
                        <td><?=$tupla['atividade']?></td>
                        <td><?=$tupla['professor']?></td>
                        <td><?=$tupla['horas']?></td>
                        <td><?=$tupla['data_inicio']?></td>
                        <td><?=$tupla['data_termino']?></td>
                        <?php if ($tupla['status'] == "Em Andamento"): ?>
                          <td><?=$tupla['status']?></td>
                        <?php elseif($tupla['status'] == "Pendente"): ?>
                          <td><?=$tupla['status']?></td>
                        <?php elseif($tupla['status'] == "Realizada"): ?>
                          <td><?=$tupla['status']?></td>
                        <?php endif; ?>
                        <td>Não Definido</td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li id="tab-meus-estagios">
            <div class="uk-padding-small" uk-grid>

            </div>
          </li>
          <li id="tab-horas-realizadas">
            <div class="uk-padding-small" uk-grid>

            </div>
          </li>
        <?php elseif ($_SESSION['pes_categoria'] == "Supervisor"): ?>
          <li id="tab-cursos">
            <div class="uk-padding-small" uk-grid>

            </div>
          </li>
          <li id="tab-lista-estagiarios">
            <div class="uk-padding-small" uk-grid>

            </div>
          </li>
        <?php endif;?>
        <li id="tab-alterar-dados">
          <div class="uk-padding-small" uk-grid>

          </div>
        </li>
        <li id="tab-documentos">
          <div class="uk-padding-small" uk-grid>

          </div>
        </li>
      </ul>
    </div>
  </div>
</body>

</html>
