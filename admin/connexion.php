<?php
  include_once('../php/connectdb.php');
  session_start();
  if(!isset($_SESSION['uid'])){
    die (header('location:./'));
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="../css/connexion.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  </head>
  <body>
    <header class="row menu grey darken-4">
      <div class="col m2 itemMenu">ADMIN</div>
      <div class="col m2 waves-effect waves-light itemMenu btnAddLink"><i class="material-icons left">link</i>Ajouter une référence</div>
      <div class="col m2 waves-effect waves-light itemMenu btnAddDoc"><i class="material-icons left">description</i>Ajouter un document</div>
      <div class="col m2 waves-effect waves-light itemMenu btnAddUn"><i class="material-icons left">book</i>Ajouter une université</div>
      <div class="col m2 waves-effect waves-light itemMenu btnAddFil"><i class="material-icons left">add</i>Ajouter une filière</div>
      <div class="col m2 waves-effect waves-light itemMenu btnDel"><i class="material-icons left">delete</i>Supprimer</div>
    </header>
    <div class="row delMenu red darken-3">
      <div class="col m2 btnUniv waves-effect waves-light">Université</div>
      <div class="col m2 btnRef waves-effect waves-light">Référence</div>
      <div class="col m2 btnDoc waves-effect waves-light">Document</div>
      <div class="col m2 btnFil waves-effect waves-light">Filière</div>
    </div>

    <div class="row principale">

      <div class="col m6 offset-m3 university zone">
        <div class="col m12 titlearea"><i class="material-icons left">book</i>Université / Institut</div>
        <div class="col m12 loader" style="display: none; width: 100%;"><center><img src="../fonts/soon.gif" /></center></div>
        <form class="univForm col m12">
          <div class="input-field col m12">
            <input type="text" class="nomU">
            <label for="nomU">Nom de l'université</label>
          </div>
          <div class="input-field col m12">
            <input type="text" class="codeU">
            <label for="codeU">Code de l'université</label>
          </div>
          <div class="errU">Informations incomplètes</div>
          <div class="col m12">
            <center><button type="submit" class="btn waves-effect waves-light grey darken-4">Valider</button></center>
          </div>
        </form>
      </div>

      <div class="col m6 offset-m3 filiere zone">
        <div class="col m12 titlearea"><i class="material-icons left">add</i>Filière</div>
        <form class="filiereForm col m12">
          <div class="input-field col m12">
            <input type="text" class="nomF">
            <label for="nomF">Nom de la filière</label>
          </div>
          <div class="input-field col m12">
            <input type="text" class="codeF">
            <label for="codeF">Code de la filière</label>
          </div>
          <div class="errF">Informations incomplètes</div>
          <div class="col m12">
            <center><button type="submit" class="btn waves-effect waves-light grey darken-4">Valider</button></center>
          </div>
        </form>
      </div>

      <div class="col m6 offset-m3 document zone">
        <div class="col m12 titlearea"><i class="material-icons left">description</i>Document</div>
        <form class="col m12 docForm" enctype="multipart/form-data">
          <div class="file-field input-field col m12">
            <div class="btn">
              <span>Choisir le document</span>
              <input type="file" class="doc" />
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <div class="input-field col m6">
            <input type="text" class="themeD">
            <label for="themeD ">Titre du document</label>
          </div>
          <!--div class="input-field col m6">
            <input type="text" class="themeD">
            <label for="themeD ">Theme du document</label>
          </div-->
          <div class="input-field col m12">
            <select class="typeD">
              <option value="these">THESE</option>
              <option value="memoire">MEMOIRE</option>
              <option value="publication">PUBLICATION</option>
              <option value="rapport">RAPPORT</option>
            </select>
          </div>
          <div class="input-field col m12">
            <input type="text" class="auteurD">
            <label for="auteurD">Nom Prenom de l'Auteur du document</label>
          </div>
          <div class="col m6 input-field">
            <input type="text" class="mailD" />
            <label for="mailD">Mail de l'auteur</label>
          </div>
          <div class="col m6 input-field">
            <input type="text" class="contactD" />
            <label for="contactD">Telephone de l'auteur (+226 7x xx xx xx)</label>
          </div>
          <div class="input-field col m12">
            <input type="text" class="anneeD" />
            <label for="anneeD">Année de publication</label>
          </div>
          <div class="input-field col m12">
            <font class="col m5">Université / institut : </font>
            <select class="univD col m7">
              <?php
                $r=$bdd->query('SELECT id, code FROM universite');
                while($data=$r->fetch()){
                  echo '<option value="'.$data['id'].'">'.$data['code'].'</option>';
                }
              ?>
            </select>
          </div>
          <div class="input-field col m12">
            <font class="col m5">Filière : </font>
            <select class="filiereD col m7">
              <?php
                $r=$bdd->query('SELECT id, code FROM filiere');
                while($data=$r->fetch()){
                  echo '<option value="'.$data['id'].'">'.$data['code'].'</option>';
                }
              ?>
            </select>
          </div>
          <div class="col m12">
            <button class="btn grey darken-4 waves-effect waves-light" type="submit">Valider</button>
          </div>
        </form>
      </div>

      <div class="col m6 offset-m3 link zone">
        <div class="col m12 titlearea"><i class="material-icons left">link</i>Référence</div>
        <form class="refForm col m12">
          <div class="input-field col m8">
            <input type="text" class="nomR" />
            <label for="nomR">Nom et prénom(s) de l'auteur</label>
          </div>
          <div class="col m4 input-field">
            <input type="number" class="anneeR" />
            <label for="anneeR">Année : (ex : 2002)</label>
          </div>
          <div class="input-field col m6">
            <input type="email" class="mailR">
            <label for="mailR">Adresse Email</label>
          </div>
          <div class="input-field col m6">
            <input type="text" class="contactR" />
            <label for="contactR">Téléphone auteur (+226 70 xx ..)</label>
          </div>
          <div class="col m12 input-field">
            <input type="text" class="titleR" />
            <label for="titleR">Thème de l'étude</label>
          </div>
          <div class="col m12">
            <font class="col m4">Domaine : </font>
            <select class="col m8 filR">
              <?php
                $r=$bdd->query('SELECT * FROM filiere');
                while($data=$r->fetch()){
                  echo '<option value="'.$data['id'].'">'.$data['code'].'</option>';
                }
              ?>
            </select>
          </div>
          <div class="col m12">
            <font class="col m4">Université : </font>
            <select class="col m8 univR">
              <?php
                $r=$bdd->query('SELECT * FROM universite');
                while($data=$r->fetch()){
                  echo '<option value="'.$data['id'].'">'.$data['code'].'</option>';
                }
              ?>
            </select>
          </div>
          <div class="col m12">
            <center><button type="sumbmit" class="btn grey darken-4 waves-effect waves-light">Valider</button></center>
          </div>
        </form>
      </div>

      <div class="delUniv col m6 offset-m3 zone">
        <?php
          $un=$bdd->query('SELECT * FROM universite');
          while($du=$un->fetch()){
            echo '<div class="col m12" style="line-height: 40px; border-bottom: solid 1px #ccc">
              <font class="col m5">'.$du['nom'].'</font><font class="col m4">'.$du['code'].'</font><button class="col m1 btn waves-effect waves-red white supu" style="color: black;"><input type="hidden" class="u" value="'.$du['id'].'" /><i class="material-icons">delete</i></button>
            </div>';
          }
        ?>
        <script type="text/javascript">
          $('.supu').click(function(){
            $.post(
              '../php/manager.php',
              {opt: 'deluniv', id: $(this).children('.u').val()},
              function(data){
              }
            );
            $(this).parent().hide();
          });
        </script>
      </div>

      <div class="delFil col m6 offset-m3 zone">
        <?php
          $un=$bdd->query('SELECT * FROM filiere');
          while($du=$un->fetch()){
            echo '<div class="col m12" style="line-height: 40px; border-bottom: solid 1px #ccc">
              <font class="col m5">'.$du['nom'].'</font><font class="col m4">'.$du['code'].'</font><button class="col m1 btn waves-effect waves-red white supf" style="color: black;"><input type="hidden" class="u" value="'.$du['id'].'" /><i class="material-icons">delete</i></button>
            </div>';
          }
        ?>
        <script type="text/javascript">
          $('.supf').click(function(){
            $.post(
              '../php/manager.php',
              {opt: 'delfil', id: $(this).children('.u').val()},
              function(data){
              }
            );
            $(this).parent().hide();
          });
        </script>
      </div>

      <div class="delRef col m8 offset-m2 zone">
        <?php
          $un=$bdd->query('SELECT a.id, a.nomAuteur, a.annee, a.theme, b.code as un, c.code as fn FROM link a, universite b, filiere c WHERE a.univ_id=b.id AND a.filiere_id=c.id');
          while($du=$un->fetch()){
            echo '<div class="col m12" style="line-height: 40px; border-bottom: solid 1px #ccc">
              <font class="col m4">'.$du['nomAuteur'].'</font><font class="col m1">'.$du['annee'].'</font><font class="col m3">'.$du['theme'].'</font><font class="col m3">'.$du['un'].' : '.$du['fn'].'</font><button class="col m1 btn waves-effect waves-red white supr" style="color: black;"><input type="hidden" class="u" value="'.$du['id'].'" /><i class="material-icons">delete</i></button>
            </div>';
          }
        ?>
        <script type="text/javascript">
          $('.supr').click(function(){
            $.post(
              '../php/manager.php',
              {opt: 'delfil', id: $(this).children('.u').val()},
              function(data){
              }
            );
            $(this).parent().hide();
          });
        </script>
      </div>

      <div class="delDoc col m8 offset-m2 zone">
        <?php
          $un=$bdd->query('SELECT a.id, a.auteur, a.annee, a.theme, b.code as un, c.code as fn FROM document a, universite b, filiere c WHERE a.universite_id=b.id AND a.filiere_id=c.id');
          while($du=$un->fetch()){
            echo '<div class="col m12" style="line-height: 40px; border-bottom: solid 1px #ccc">
              <font class="col m4">'.$du['auteur'].'</font><font class="col m1">'.$du['annee'].'</font><font class="col m3">'.$du['theme'].'</font><font class="col m3">'.$du['un'].' : '.$du['fn'].'</font><button class="col m1 btn waves-effect waves-red white supd" style="color: black;"><input type="hidden" class="u" value="'.$du['id'].'" /><i class="material-icons">delete</i></button>
            </div>';
          }
        ?>
        <script type="text/javascript">
          $('.supd').click(function(){
            $.post(
              '../php/manager.php',
              {opt: 'deldoc', id: $(this).children('.u').val()},
              function(data){
              }
            );
            $(this).parent().hide();
          });
        </script>
      </div>

    </div>

    <script src="../js/connexion.js"></script>
  </body>
</html>
