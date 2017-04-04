<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Index</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet" type="text/css"/>
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
                        <li class='active'><a href="couronne1.php">Couronne 1</a></li>
                        <li><a href="couronne2.php">Couronne 2 </a></li>
                        <li><a href="couronne3.php">Couronne 3</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="body-container container">
            <article>    
                <h1  class="titre"> LOS TARDOS</h1> 

                <h2 class="article">Faire la croix blanche.</h2>
                <center>
                    <article class='etape'>
                        <p>La croix, qui a plutôt la forme d’un signe plus + et les coins peuvent être construit intuitivement. </p>
                        <img src="img/croix.png" alt="" class="image" />
                        <p class='legend'>La croix blanche.</p>
                    </article>
                    <article class='etape'>
                        <img src="img/croix2.png" alt="" class="image" />
                        <p class='legend'>La croix blanche et un côté correctement placé.</p>
                    </article>
                    <article class='etape'>
                        <img src="img/faceblanche.PNG" alt="" class="image" />
                        <p class='legend'>La face blanche entière.</p>
                    </article>
                </center>
            </article>
            <a href='couronne2.php'>Faire la 2ème couronne</a>   <--- (L'étage du milieu)
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