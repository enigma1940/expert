
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>BDNE :: Banque de données Nationnal d'expertise</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/mystyle.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet" />
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


    <div class="container">

        <div class="row" style="margin-top:20px">
            <div class="col-lg-10 col-lg-offset-1">

                <div class="header clearfix">

                    <nav>
                    <ul class="nav nav-pills pull-right">
                        <li role="presentation" class="active"><a href="#">Accueil</a></li>
                        <li role="presentation"><a href="#">A Propos</a></li>
                        <li role="presentation"><a class="btn-login">Se connecter</a></li>
                    </ul>
                    <div class="col-sm-12 loginZone pull-right"></div>
                    </nav>
                    <h3 class="text-muted">
                        <img src="images/logo.jpg" alt="logo" style="width:40px"/>
                        BDNE
                    </h3>

                </div>
                <hr>

                <div id="search-box" class="home">

                    <input type="search" name="search" id="search" placeholder="recherche ">

                    <a href="recherche.php" class="btn btn-send">
                        <span class="glyphicon glyphicon-phone"></span> recherche
                    </a>
                    <br>
                    <select>
                        <option value="">Universite</option>
                    </select>
                    <select>
                        <option value="">Filiere</option>
                    </select>
                    <select>
                        <option value="">Année</option>
                    </select>

                </div>


                <div class="text-center">
                    Rubriques
                </div><br>
                <div class="list-rubrique">
                    <a>Informatique</a>
                    <a>Economie</a>
                    <a>Medecine</a>
                    <a>Sociologie</a>
                </div>



                <footer class="footer text-center">
                    <p>Tous droits réservés!. 2017</p>
                </footer>

            </div>

        </div>


    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  </body>
</html>
