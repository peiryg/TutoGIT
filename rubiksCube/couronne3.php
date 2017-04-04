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
                        <li><a href="couronne2.php">Couronne 2 </a></li>
                        <li class="active"><a href="couronne3.php">Couronne 3</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="body-container container">
            <article>    
                <h1  class="titre"> LOS TARDOS</h1> 
            </article>
            <h2 class="article">Retour vers le futur.</h2>
            <article class="etape">
                <p>Pour réaliser la croix jaune avec seulement le point, il faut répéter cet algorithme 3 fois.</p>
                <ol>
                    <li>Je vais dans le futur.</li>
                    <li>J'ouvre une boîte main droite.</li>
                    <li>Je sors le papier super important.</li>
                    <li>Je ferme la boîte main gauche.</li>
                    <li>Je glisse le papier dans ma poche.</li>
                    <li>Je retourne vers le passé.</li>
                </ol>
                <video controls muted>
                    <source src="vids/croix.mp4" type="video/mp4">
                </video>
                <p class='legend'>
                    3x F R U R' U' F'
                </p>
            </article>
            <article class="etape">
                <p>Répéter l'algorithme 2 fois si vous avez le L inversé.</p>
                <video controls muted>
                    <source src="vids/croix2.mp4" type="video/mp4">
                </video>
                <p class='legend'>
                    2x F R U R' U' F'
                </p>
            </article>
            <article class="fin">
                <p>
                    Il faut le faire une seule fois si vous avez le |.
                </p>
                <video controls muted>
                    <source src="vids/croix3.mp4" type="video/mp4">
                </video>
                <p class='legend'>
                    1x F R U R' U' F'
                </p>
            </article>
            <h2 class="article">L'homme bourre sur la chaise.</h2>
            <p>Pour bien orienter les arrêtes, il faut faire l'algorithme de l'homme bourré.</p>
            <ol>
                <li>L'homme bourré se leve de sa chaise brusquement.</li>
                <li>Comme il est en forme il part très loin x2.</li>
                <li>Mais sa chaise tombe (Moins en forme que l'homme cette chaise).</li>
                <li>L'homme bourré revient un peu (x1) sur ses pas.</li>
                <li>Il redresse sa chaise.</li>
                <li>Il revient se placer devant (x1) sa chaise.</li>
                <li>Pour finir il se rassied.</li>
            </ol>
            <article class="fin">
                <video controls muted>
                    <source src="vids/placer_arete.mp4" type="video/mp4">
                </video>
                <p class='legend'>
                    R U 2R' U' R U' R'
                </p>
            </article>
            <h2 class="article">Madame Curieuse.</h2>
            <p>Pour bien bien placer les coins, il faut utiliser l'algorithme de la Madame Curieuse.</p>
            <ol>
                <li>Ses copines de gauche montent.</li>
                <li>Madame Curieuse va les voir.</li>
                <li>Ses copines de droite montent à leur tour.</li>
                <li>Madame Curieuse va les voir (trop prévisible la meuf).</li>
                <li>Les copines de gauche en ont marre et descendent.</li>
                <li>Madame Curieuse revient leur dire au revoir.</li>
                <li>Les filles de droite redescendent.</li>
                <li>Madame Curieuse revient ENFIN à sa place.</li>
            </ol>
            <article class="fin">
                <video controls muted>
                    <source src="vids/placer_coins.mp4" type="video/mp4">
                </video>
                <p class='legend'>
                    L' U R U' L U R' U'
                </p>
            </article>
            <h2 class="article">L'homme bourre sur la chaise.</h2>
            <p>Pour bien orienter les arrêtes, il faut faire l'algorithme de l'homme bourré.</p>
            <ol>
                <li>L'homme bourré se leve de sa chaise brusquement.</li>
                <li>Comme il est en forme il part très loin x2.</li>
                <li>Mais sa chaise tombe (Moins en forme que l'homme cette chaise).</li>
                <li>L'homme bourré revient un peu (x1) sur ses pas.</li>
                <li>Il redresse sa chaise.</li>
                <li>Il revient se placer devant (x1) sa chaise.</li>
                <li>Pour finir il se rassied.</li>
                <p></p>
                <li>L'homme bourré se leve du pied gauche.</li>
                <li>Comme il est en forme il part très loin x2.</li>
                <li>Mais sa chaise tombe (Moins en forme que l'homme cette chaise).</li>
                <li>L'homme bourré en a marre et part encore plus loin.</li>
                <li>La chaise rebondit.</li>
                <li>Il continue son chemin.</li>
                <li>La chaise retombe</li>
            </ol>
            <article class="etape">
                <video controls muted>
                    <source src="vids/chaise.mp4" type="video/mp4">
                </video>
                <p class='legend'>
                    R U 2R' U' R U' R' L' U 2L U L' U L<br>
                    Il faut le faire jusqu'à qu'il y ait une ligne complète.
                </p>
            </article>
            <article class='etape'>
                <video controls muted>
                    <source src="vids/fin.mp4" type="video/mp4">
                </video>
                <p class='legend'>
                    R U 2R' U' R U' R' L' U 2L U L' U L<br>
                    Il faut le faire jusqu'à ce que le cube soit fini.
                </p>
            </article>
            <a href='index.php'>Retour à l'accueil</a>

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