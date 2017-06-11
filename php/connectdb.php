<?php
  try {
    $bdd=new PDO('mysql:dbname=francophonie;host=localhost', 'root', '');
  } catch (Exception $e) {
    die('ERROR : '.$e->getMessage());
  }

?>
