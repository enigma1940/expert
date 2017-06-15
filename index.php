<?php
  include_once('php/connectdb.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="css/home.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  </head>
  <body>
    <header class="row">
      <div class="col m1 logo"><img src="fonts/logo.png" style="width: 70%;" /></div>
      <div class="col m8 title">
        BDNE :: BANQUE NATIONALE DE DONNEES D'EXPERTISE
      </div>
      <div class="col m1 item waves-effect waves-yellow">Accueil</div>
      <div class="col m1 item waves-effect waves-yellow">Connexion</div>
      <div class="col m1 item waves-effect waves-yellow">A propos</div>
    </header>
    <div class="row mainContainer">
      <div class="col m12 searchArea">
        <form class="searchForm col m12">
          <div class="col m1 captionSearch">Rechercher : </div>
          <div class="input-field col m5" style="margin: 0px;">
            <i class="material-icons prefix">search</i>
            <input type="text" class="searchText" />
            <label>Faire une recherche</label>
          </div>
          <select class="col m2 univChoice">
            <option value="">Choisir une université?</option>
            <?php
              $r=$bdd->query('SELECT * FROM universite');
              while($d=$r->fetch()){
                echo '<option value="'.$d['code'].'">'.$d['nom'].'</option>"';
              }
            ?>
          </select>
          <select class="col m2 univChoice">
            <option value="">Choisir une filière?</option>
            <?php
              $r=$bdd->query('SELECT * FROM filiere');
              while($d=$r->fetch()){
                echo '<option value="'.$d['code'].'">'.$d['nom'].'</option>"';
              }
            ?>
          </select>
          <select class="col m1 univChoice">
            <option value="">Année?</option>
            <?php
              $r=$bdd->query('SELECT DISTINCT annee FROM document ORDER BY annee DESC');
              while($d=$r->fetch()){
                echo '<option>'.$d['annee'].'</option>';
              }
            ?>
          </select>
          <div class="col m1">
            <button type="submit" class="btn waves-effect waves-light"><i class="material-icons">search</i></button>
          </div>
        </form>
      </div>

      <div class="col m12 rubriqueArea">
        <?php
          $r=$bdd->query('SELECT id ,code, nom FROM filiere');
          while($d=$r->fetch()){
            echo '<div class="col m2 rubrique">
              <div class="col m12">'.$d['code'].'</div>
              <div class="col m12">'.$d['nom'].'</div>';
              $r0 =$bdd->prepare('SELECT count(*) as n FROM document WHERE filiere_id=?');
              $r0->execute(array($d['id']));
              $d0=$r0->fetch();
              echo '<div class="col m12"><font class="right ctItem">'.$d0['n'].' items</font></div>';
            echo '</div>';
          }
        ?>
      </div>



    </div>

    <script src="js/home.js"></script>
  </body>
</html>
