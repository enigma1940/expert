
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

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="css/mystyle.css" rel="stylesheet">

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
                        <li role="presentation"><a href="#">Publier</a></li>
                        <li role="presentation"><a href="#">A Propos</a></li>
                    </ul>
                    </nav>
                    <h3 class="text-muted">
                        <img src="images/logo.jpg" alt="logo" style="width:40px"/>
                        Document
                    </h3>
                    
                </div>
                <hr>

                <div id="search-box">

                    <input type="search" name="search" id="search" placeholder="saisir le theme ">

                    <a href="recherche.php" class="btn btn-send">
                        <span class="glyphicon glyphicon-phone"></span> recherche
                    </a>
                    <br>
                    <select>
                        <option value="">Filiere</option>
                    </select>
                    <select>
                        <option value="">Année</option>
                    </select>

                    
                </div>

                <div class="panel-list panel panel-default">

                    <div class="panel-heading text-center">
                        Resultat 
                    </div>
                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Theme</th>
                                <th>Filiere</th>
                                <th>Université</th>
                                <th>Année</th>
                                <th>Auteur</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="">La paix dans le monde</a></td>
                                <td><a>Socilogie </a></td>
                                <td><a>Univ.Ouaga I </a></td>
                                <td>2015</td>
                                <td>Ouedraogo Cecile</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="">Developpement d'un systeme de reservation d'hotels</a></td>
                                <td><a>Informatique </a></td>
                                <td><a>Univ.Ouaga II </a></td>
                                <td>2015</td>
                                <td>Ouoba Yemba</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="">Impacts du changement climatique au Burkina Faso </a></td>
                                <td><a>E </a></td>
                                <td><a>Univ.Ouaga II </a></td>
                                <td>2015</td>
                                <td>Ouoba Yemba</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href="">Accès à l'eau dans le milieu rural</a></td>
                                <td><a>Eau et assainissement </a></td>
                                <td><a>Univ.Ouaga I </a></td>
                                <td>2010</td>
                                <td>Lompo Georges</td>
                            </tr>
                        
                        </tbody>
                    
                    </table>

                    <hr>

                    <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                    </ul>
                    </nav>
                
                </div>

                

                <footer class="footer">
                    <p>&copy; 2016 Company, Inc.</p>
                </footer>

            </div>

        </div>
        
      
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
  </body>
</html>
