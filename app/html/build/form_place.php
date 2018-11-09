<legend class="uk-legend">Informações da <?=ucfirst($chave)?></legend>
<div class="uk-margin-medium uk-container-large uk-column-1-3">
  <label class="uk-form-label" for="">Nome</label>
  <input class="uk-input uk-form-medium" type="text" name="nome" value="">
  <label class="uk-form-label" for="">Fantasia</label>
  <input class="uk-input uk-form-medium" type="text" name="fantasia" value="">
  <label class="uk-form-label" for="">E-mail</label>
  <input class="uk-input uk-form-medium" type="email" name="email" value="">
</div>
<div class="uk-margin-medium uk-container-large uk-column-1-3">
  <label class="uk-form-label" for="">CPNJ</label>
  <input class="uk-input uk-form-medium" type="text" name="cnpj" value="">
  <label class="uk-form-label" for="">Telefone 1</label>
  <input class="uk-input uk-form-medium" type="text" name="telefone_1" value="">
  <label class="uk-form-label" for="">Telefone 2</label>
  <input class="uk-input uk-form-medium" type="text" name="telefone_2" value="">
</div>
<div class="uk-margin-medium uk-container-large uk-column-1-4">
  <label class="uk-form-label" for="">Dia da Semana - Início</label>
  <select class="uk-select" name="data_funcionamento_inicio">
    <option value="segunda_feira">Segunda-Feira</option>
    <option value="terca_feira">Terça-Feira</option>
    <option value="quarta_feira">Quarta-Feira</option>
    <option value="quinta_feira">Quinta-Feira</option>
    <option value="sexta_feira">Sexta-Feira</option>
    <option value="sabado">Sabado</option>
  </select>
  <label class="uk-form-label" for="">Horario - Início</label>
  <input class="uk-input uk-form-medium" type="time" name="horario_funcionamento_inicio" value="">
  <label class="uk-form-label" for="">Dia da Semana - Término</label>
  <select class="uk-select" name="data_funcionamento_termino">
    <option value="segunda_feira">Segunda-Feira</option>
    <option value="terca_feira">Terça-Feira</option>
    <option value="quarta_feira">Quarta-Feira</option>
    <option value="quinta_feira">Quinta-Feira</option>
    <option value="sexta_feira">Sexta-Feira</option>
    <option value="sabado">Sabado</option>
  </select>
  <label class="uk-form-label" for="">Horario - Término</label>
  <input class="uk-input uk-form-medium" type="time" name="horario_funcionamento_termino" value="">
</div>
