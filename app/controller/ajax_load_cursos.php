<?php
require_once '../config.php';
require_once AUTOLOAD;
$facul = $_POST['faculdade'];
$cursos = new Curso();
Conexao::startTransaction();
foreach ($cursos->getCursoByFaculdadeId($facul) as $key => $value) {
  $res .= "<option value=\"{$value['curso_id']}\">{$value['curso_nome']}</option>";
}
echo $res;

 ?>
