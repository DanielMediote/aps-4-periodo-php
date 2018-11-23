<?php
/**
*
*/
class Sessao
{

  public function open(){
    session_start();
  }

  public function sessionSetGlobals($dataBean){
    $_SESSION['status'] = True;
    foreach ($dataBean[0] as $key => $value) {
      $_SESSION[$key] = $value;
    }
  }

  public function sessionUnsetGlobals(){
    foreach ($_SESSION as $key => $value) {
      unset($_SESSION[$key]);
    }
    $_SESSION['status'] = False;
  }
}

?>
