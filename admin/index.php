<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="../css/admin.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  </head>
  <body>
    <header class="row menu">
      <div class="col m1"></div>
    </header>
    <div class="row principal">
      <div class="col m4 offset-m4" style="border: solid 2px #333; border-radius: 20px;">
        <div class="col m12 titlearea">Connexion</div>
        <form class="col m12 connForm">
          <div class="input-field col m12">
            <input type="text" class="userName" />
            <label for="userName">Identifient</label>
          </div>
          <div class="input-field col m12">
            <input type="password" class="userPass" />
            <label for="userPass">Mot de passe</label>
          </div>
          <div class="col m12 connErr">Informations incorrectes</div>
          <div class="col m12">
            <center><button type="submit" class="btn grey darken-4 waves-effect waves-light">Connexion</button></center>
          </div>
        </form>
      </div>
    </div>

    <script type="text/javascript" src="../js/admin.js"></script>
  </body>
</html>
