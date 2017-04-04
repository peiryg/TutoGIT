<?php
include("apropos.php");
?>
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
                        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>               
                        <li> <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-info-sign"></span> A propos</a></li>
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
            <article>    
                <h1  class="titre"> LOS TARDOS</h1> 
            </article>
            <article class='intro'>

                <h3>Comment résoudre un Rubik's cube?</h3>

                <p>Le Rubik’s Cube (ou Cube de Rubik) est un casse-tête inventé par Ernő Rubik en 1974, et qui s’est rapidement répandu sur toute la planète au cours des années 1980.
                    Au Canada francophone, il est nommé Cube Rubik (sans le « de »). L'appellation Rubik's Cube est considérée comme exclusivement anglophone.</p>

                <img src="img/cubeIndex.png" alt="" class='image'/>
                <p class='legend'>Un rubik's cube 3x3</p>


                <p> Il s'agit d'un casse-tête géométrique à trois dimensions composé extérieurement de 26 éléments qui, à première vue, semblent être des cubes pouvant se déplacer sur toutes les faces et paraissant libres de toute attache sans tomber pour autant. Un système d’axes, dont le mécanisme a été breveté par son auteur, Ernő Rubik, se cache au centre du cube.</p>

                <img src="img/erno.jpg" alt="" class='image'/>
                <p class='legend'>Ernő Rubik</p>
                <p>Le Rubik’s Cube est un cube dont chaque face est divisée en neuf cubes miniatures qui peuvent tourner indépendamment les uns des autres. En fait le cube est composé d’un axe central portant les centres des 6 faces, de 8 cubes de coin à 3 faces visibles et de 12 cubes d’arête à 2 faces visibles. À l’état final, chaque face du cube de Rubik est d’une couleur homogène et différente des autres, mais la rotation indépendante de chaque face provoque un mélange des petits cubes de coin et d’arête.</p>
                <br><p>Il y a 3 étapes de résolution du Rubik's cube. Voici les liens vers les étapes. </p>
            </article>
            <article class='liste'>
                <ol>
                    <li><a href='couronne1.php'>Faire la 1ère couronne</a>   <--- (Résolution de la face blanche)</li>
                    <li><a href='couronne2.php'>Faire la 2ème couronne</a>   <--- (Les 2 lignes du haut)</li>
                    <li><a href='couronne3.php'>Faire la 3ème couronne</a>   <--- (La fin du cube)</li>
                </ol>
            </article>
        </section>
        <footer class="footer">
            <div class="container">
                <p class="text-muted">&COPY;  Los Tardos Production</p>
            </div>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>