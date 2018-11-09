<?php
require_once '../config.php';
require_once AUTOLOAD;
$curso = new Curso();
Conexao::startTransaction();
for ($i = 1; $i <= $curso->getCursoPeriodos($_POST['curso']); $i++) {
  $res .= "<option value=\"".$i."_periodo\">".$i."º Periodo</option>";
}
echo $res;

 ?>
