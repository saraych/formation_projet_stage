<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="Css/acceuil.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="Css/navbar.css">

</head>

<body>

    <div id="back">
        <div class="container">
    <header class="home">
        <nav id="nav_commun ">
            <p>la formation</p>

            <ul>
                <li><a href="accueil.php">Accueil</a></li>

                <?php if (!isset($_SESSION['connected']) ) { ?>

                <li><a href="inscription.php">Inscription</a></li>

                <li><a href="./connexion.php">Connexion</a></li>
                <?php                                         
                    } else { ?>

                <li><a href="logout.php">Deconnexion</a></li>

                    
                <?php  } 
                     ?>
            </ul>
        </nav>

    </header>
</div>

<section id="first">
    <h2> </h2>
</section>
<section id="second">
    <h3> </h3>
</section>

        <section id="accueil">
            <div id='recherche'>
                <h1> faite une recherche</h1>
                <i id="mis" class="material-icons">home</i>
                <input type="text" name="recherche" placeholder="rechercher une formation">
                <button type="submit"><i id="srch" class="material-icons">search</i></button >
                
                    
                    
           
   <div id="image">
       <?php 
            if (isset($_SESSION['connected']))    
                echo "ID USER : " .$_SESSION['id']; ?>       
   </div>
        </div>
      </section>
   </div>
    <script type="text/javascript" src="Js/acceuil.js"></script>
</body>
</html>