<?php
  include_once('connectdb.php');
  function chargerClasse($classe){
		require 'classes/'.$classe.'.class.php';
	}
	spl_autoload_register('chargerClasse') ;

  switch (htmlspecialchars($_POST['opt'])) {
    case 'connect':
        $admin = new Admin();
        $admin->setUname(htmlspecialchars($_POST['uname']));
        $admin->setPassword(sha1(htmlspecialchars($_POST['password'])));
        if( $admin->auth($bdd)==1){
          session_start();
          $_SESSION['uname']= $admin->getUname();
          $_SESSION['uid']= $admin->getId();
          echo 'success';
        }else{
          echo 'error';
        }
      break;

    default:
      # code...
      break;
  }

?>
