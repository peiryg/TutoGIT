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
                        <li><a href="couronne1.php">Couronne 1</a></li>
                        <li class="active"><a href="couronne2.php">Couronne 2 </a></li>
                        <li><a href="couronne3.php">Couronne 3</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="body-container container">
            <article>    
                <h1  class="titre"> LOS TARDOS</h1> 
            </article>
            <article class="etape">
                <h2 class="article">L'histoire du mec bourre.</h2>
                <p>
                    D'abord, il faut :
                <ul class="liste">
                    <p>- Placer la face blanche vers le bas.</p>
                    <p>- Placer le T face à vous.</p>
                    <p>- L'arête à placer à la base du T.</p>
                </ul> 
                </p>
                <p>
                    Le mec bourré veut partir à droite, mais comme il est bourré, il se trompe de sens et part à gauche.<br>
                    Ses potes de droite montent le chercher.<br>
                    Le mec bourré revient à droite.<br>
                    Ses amis de droite redescendent.<br>
                    Le mec bourré part à droite et toute la face de devant part à l'opposé<br>
                    Épuisé, il revient sur ses pas et la face de devant repart à l'opposé.
                </p>
                <video controls muted>
                    <source src="vids/13_c2_droite.mp4" type="video/mp4">
                </video>
                <p class='legend'>
                    U R U' R' U' F' U F
                </p>
            </article>
            <article class="etape">
                <p>
                    Le mec bourré veut partir à gauche, mais comme il est bourré, il se trompe de sens et part à droite.<br>
                    Ses potes de gauche montent le chercher.<br>
                    Le mec bourré revient à gauche.<br>
                    Ses amis de gauche redescendent.<br>
                    Le mec bourré part à gauche et toute la face de devant part à l'opposé<br>
                    Épuisé, il revient sur ses pas et la face de devant repart à l'opposé.
                </p>
                <video controls muted>
                    <source src="vids/14_c2_gauche.mp4" type="video/mp4">
                </video>
                <p class='legend'>
                    U' L U L' U F U' F'
                </p>
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