<fieldset class="uk-fieldset">
  <?php include ROOT."/html/build/form_pessoa.php"; ?>
  <?php include ROOT."/html/build/viacep.php"; ?>
  <legend class="uk-legend">Informações Avançadas</legend>
  <div class="uk-margin-medium uk-container-large uk-column-1-4">
    <label for="">Faculdade</label>
    <select class="uk-select" name="faculdade" onchange="load_cursos()">
      <option value="NULL" default seleted hidden>Selecionar</option>
      <?php foreach ($faculdade->readAll() as $key => $value): ?>
        <option value="<?=$value['faculdade_id']?>"><?=$value['faculdade_nome']?></option>
      <?php endforeach; ?>
    </select>
    <label for="">Curso</label>
    <select class="uk-select" name="curso" onchange="load_periodos()">
      <option value="NULL" default seleted hidden>Selecionar</option>
    </select>
    <label for="">Periodo</label>
    <select class="uk-select" name="periodo">
      <option value="NULL" default seleted hidden>Selecionar</option>
    </select>
    <label for="uk-label">RA</label>
    <input class="uk-input uk-form-medium" type="text" name="ra" value="">
  </div>
</fieldset>
