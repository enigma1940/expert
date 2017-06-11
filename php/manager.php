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
      $path = pathinfo($_FILES['file']['name']);
      $ext = $path['extension'];
      move_uploaded_file($_FILES['file']['tmp_name'], '../files/'.htmlspecialchars($_POST['type']).'/'.md5($_FILES['file']['name']).'.'.$ext);

      $doc = new Document();
      $doc->setTheme(htmlspecialchars($_POST['theme']));
      $doc->setType(htmlspecialchars($_POST['type']));
      $doc->setAuteur(htmlspecialchars($_POST['auteur']));
      $doc->setAnnee(htmlspecialchars($_POST['annee']));
      $doc->setUniversite_id(htmlspecialchars($_POST['universite']));
      $doc->setFiliere_id(htmlspecialchars($_POST['filiere']));
      $doc->setAdmin_id($_SESSION['uid']);
      $doc->setContenu('../files/'.htmlspecialchars($_POST['type']).'/'.md5($_FILES['file']['name']).'.'.$ext);
      $doc->setMailAuteur(htmlspecialchars($_POST['mail']));
      $doc->setConactAuteur(htmlspecialchars($_POST['contact']));
      $doc->create($bdd);
    break;

  case 'annuaire'
      
    break;

}


?>
