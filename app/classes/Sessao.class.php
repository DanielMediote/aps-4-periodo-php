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
    foreach ($dataBean as $key => $value) {
      $_SESSION[$key] = $value;
    }
  }


  public function sessionUnsetGlobals(){
    $_SESSION['status'] = False;
    foreach ($_SESSION as $key => $value) {
      unset($_SESSION[$key]);
    }
  }
}

?>
