<?php
function minhasClasses($className) {
  require_once(ROOT."/classes/" . $className . ".class.php");
}
spl_autoload_register("minhasClasses");
?>
