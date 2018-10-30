<fieldset class="uk-fieldset">
  <legend class="uk-legend">Informações Básicas</legend>
  <div class="uk-margin-medium uk-container-large uk-column-1-3">
    <label class="" for="">Nome</label>
    <input class="uk-input uk-form-medium" type="text" name="" value="">
    <label class="" for="">Sobrenome</label>
    <input class="uk-input uk-form-medium" type="text" name="" value="">
    <label class="" for="">E-mail</label>
    <input class="uk-input uk-form-medium" type="email" name="" value="">
  </div>
  <div class="uk-margin-medium uk-container-large uk-column-1-4">
    <label class="" for="">Usuario</label>
    <input class="uk-input uk-form-medium" type="text" name="" value="">
    <label class="" for="">Nova Senha</label>
    <input class="uk-input uk-form-medium" type="password" name="" value="">
    <label class="" for="">Repetir Senha</label>
    <input class="uk-input uk-form-medium" type="password" name="" value="">
    <label for="">Gênero</label>
    <select class="uk-select" name="">
      <option default seleted hidden>Selecionar</option>
      <option value="M">Masculino</option>
      <option value="F">Femenino</option>
      <option value="O">Outro</option>
    </select>
  </div>
  <div class="uk-margin-medium uk-container-large uk-column-1-3">
    <label class="" for="">CPF/RG</label>
    <input class="uk-input uk-form-medium" type="text" name="" value="">
    <label class="" for="">Telefone 1</label>
    <input class="uk-input uk-form-medium" type="text" name="" value="">
    <label class="" for="">Telefone 2</label>
    <input class="uk-input uk-form-medium" type="text" name="" value="">
  </div>
  <?= include ROOT."/html/build/viacep.php" ?>
  <legend class="uk-legend">Informações Avançadas</legend>
  <div class="uk-margin-medium uk-container-large uk-column-1-4">
    <label for="">Faculdade</label>
    <?php
    $faculdade = new Faculdade();
    $curso = new Curso();
    $empresa = new Empresa();
    ?>
    <select class="uk-select" name="">
      <option default seleted hidden>Selecionar</option>
      <?php foreach ($faculdades as $key => $value): ?>
        <option value="<?=$faculdades['faculdade_id']?>"><?=$value?></option>
      <?php endforeach; ?>
    </select>
    <label for="">Curso</label>
    <select class="uk-select" name="">
      <option default seleted hidden>Selecionar</option>
      <?php foreach ($variable as $key => $value): ?>
        <option value=""></option>
      <?php endforeach; ?>
    </select>
    <label for="">Periodo</label>
    <input class="uk-input uk-form-medium" type="text" name="" value="">
    <label for="uk-label">Turma</label>
    <input class="uk-input uk-form-medium" type="text" name="" value="">
  </div>
</fieldset>
