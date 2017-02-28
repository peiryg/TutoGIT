<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Index</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <p>
                        <a href="index.php">
                            <img class="navbar-brand" src="img/rubiks-cube.png" alt="Logo">
                        </a>
                    </p>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>               
                        <li><a href="apropos.php"><span class="glyphicon glyphicon-info-sign"></span> A propos</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Couronnes <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="couronne1.php">Couronne 1</a></li>
                                <li><a href="couronne2.php">Couronne 2 </a></li>
                                <li><a href="couronne3.php">Couronne 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="body-container container">
            <article class="titre">        
                <h1 style="color:#cc0033;font-family:Garamond;font-size:50px;"> LOS TARDOS</h1> 
            </article>
            <article class="etape">
            </article>
            

        </section>
        <footer class="footer">
            <div class="container">
                <p class="text-muted">&COPY; 2017 all rights reserved</p>
            </div>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>