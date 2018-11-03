<?php
require_once '../config.php';
$facul = $_POST['faculdade'];

require_once AUTOLOAD;
$cursos = new Curso();
foreach ($cursos->getCursoByFaculdadeId($facul) as $key => $value) {
  $res .= "<option value=\"{$value['curso_id']}\">{$value['curso_nome']}</option>";
}
echo $res;

 ?>
