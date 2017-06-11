<?php
include_once('connectdb.php');
function chargerClasse($classe){
  require 'classes/'.$classe.'.class.php';
}
spl_autoload_register('chargerClasse') ;

switch (htmlspecialchars($_POST['opt'])) {
  case 'univ':
      $univ = new University();
      $univ->setNom(htmlspecialchars($_POST['nom']));
      $univ->setCode(htmlspecialchars($_POST['code']));
      $univ->create($bdd);
    break;

  case 'filiere':
      $fil = new Filiere();
      $fil->setNom(htmlspecialchars($_POST['nom']));
      $fil->setCode(htmlspecialchars($_POST['code']));
      $fil->create($bdd);
    break;

  case 'document':

    break;

}


?>
