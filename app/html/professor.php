<fieldset class="uk-fieldset">
  <?php include ROOT."/html/build/form_pessoa.php"; ?>
  <?php include ROOT."/html/build/viacep.php"; ?>
  <legend class="uk-legend">Informações Avançadas</legend>
  <div class="uk-margin-medium uk-container-large uk-column-1-4">
    <label for="">Faculdade</label>
    <select class="uk-select" name="faculdade" onchange="load_cursos()">
      <option default seleted hidden>Selecionar</option>
      <?php foreach ($faculdade->readAll() as $key => $value): ?>
        <option value="<?=$value['faculdade_id']?>"><?=$value['faculdade_nome']?></option>
      <?php endforeach; ?>
    </select>
    <?php $graduacao = array(
      'Tecnologo',
      'Baicharelado',
      'Especializado',
      'Mestrado',
      'Doutorado',
      'Pós-Doutorado',
    );
    ?>
    <label for="">Graduação</label>
    <select class="uk-select" name="">
      <option default seleted hidden>Selecionar</option>
      <?php foreach ($graduacao as $value): ?>
        <option value="<?=$value?>"><?=$value?></option>
      <?php endforeach; ?>
    </select>
    <label for="">Área de Atuação</label>
    <input class="uk-input uk-form-medium" type="text" name="" value="">
  </div>
</fieldset>
