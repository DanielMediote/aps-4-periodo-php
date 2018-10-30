<?php
define(ROOT, __DIR__);
define(HOST, $_SERVER['SERVER_NAME']);
define(URL, $_SERVER['REQUEST_URI']);
define(LINKS, ROOT.'/links.php');
define(AUTOLOAD, ROOT.'/controller/autoload.php');
define(FPDF, ROOT.'/lib/fpdf181/fpdf.php');
?>
