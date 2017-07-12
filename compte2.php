<?php
  require 'pdo.php';
  if (array_key_exists('user', $_SESSION) == false) {
    // l'utilisateur n'est pas connecté
    header('Location:inscription.php');
}?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="css/compte.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="back">
         <header class="home">
                <nav id="nav_commun">
                    <ul id="nv">
                        <li class="test">Mon compte</li>
                        
                        <li><a href="accueil.php">Accueil</a></li>
                        <li><a href="./logout.php">Deconnexion</a></li>
                    </ul>
                </nav>
        </header>
        </div>
        <script type="text/javascript" src="js/compte.js"></script>
    </body>

    </html>