<?php    
 require'pdo.php';
//var_dump($_SESSION);
 extract($_POST);

  if (!empty($_POST)){
      
        $pseudo = $_POST['pseudo'];
        $password=$_POST['password'];
        $passwordcrypt = crypt($_POST['password'], '$2a$07$302838711915bef2db65cc$');
        $req = $dbh->prepare("SELECT * FROM user WHERE pseudo = :pseudo AND password = :password");
    
        $req->bindValue(":pseudo",$pseudo, PDO::PARAM_STR);
        $req->bindValue(":password", $passwordcrypt, PDO::PARAM_STR);
        $req->execute();
        $res = $req->fetch();
        $name = $res['name'];
        $userId = $res['Id'];
        $mail =$res['mail'];
      
      
    if ($passwordcrypt == $res['password'])
    {                                                         
        
        echo 'Password is valid!';
        
     $_SESSION['user'] = 
              [
              'name' => $name,
              'pseudo'=> $pseudo,
              'userId'=> $userId,
               'mail'=> $mail
                ];
     if(array_key_exists('user', $_SESSION) == true)
     {/* header('location:compte.php');*/
         $message = 'Bonjour '.$_SESSION['user']['name'];
     }          
   // var_dump($_SESSION);
          
          header('location:compte.php');
         // echo "Bienvenue"." ".$res['pseudo']
         /* header('location:accueil.php');*/
    }
    else 
    { 
        echo 'Invalid password.'; 
      
    };}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/deux.css">
    <link rel="stylesheet" href="css/inscription.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>

<body>
    <div id="back">

        <header class="home">
            <nav id="nav_commun">


                <ul id="nv">
                    <li class="test">La formation </li>
                    <li><a href="accueil.php">Accueil</a></li>

                    <?php if(array_key_exists('user', $_SESSION) !== true)  { ?>

                    <li><a class="cl">inscription</a></li>


                    <li><a class="onclick">Connexion</a></li>
                    <?php } else { ?>


                    <li><a class="voila" href="compte.php">Mon compte</a></li>

                    <li><a href="./logout.php">Deconnexion</a></li>

                    <?php } ?>
                </ul>
            </nav>

        </header>
    </div>

    <section id="first">

        <h2> </h2>
    </section>
    <section id="second">

    </section>

    <div id="connectdiv" class="hidden animate">
<div  class="loginimage" text-center> <h2>Identifiez-vous</h2></div>


      <div class="logintext"> <form action="" method="POST" class="form" id="connect">

            <button type="button" class="close">×</button><br />
            <div class="form-group">
                <div class="col-xs-6">
                    <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required>
                </div>
            </div>
<div class="col-xs-6">
    <div class="form-group">
        <input type="password" name="password" placeholder="Mot de passe " required></div>

    <button type="submit" class="btn" value="Connexion">
</button>

    <li><a href="logout.php">Deconnexion</a></li>
</div>



</form>
</div>
</div> 



<div class="bienvenue">
    <?php
         if(!empty($message))
         {?>
        <strong><?php echo $message;?></strong>
        <?php
         }
        ?>
</div>

<section id="accueil">
    <div id='recherche'>
        <h1> Faite une recherche</h1>

        <form action="" class="rc">
          <fieldset>
         <button><i id="mis" class="material-icons">home</i></button>
            <input type="text" class="search" name="recherche" placeholder="rechercher une formation">
            <button type="submit"><i id="srch" class="material-icons">search</i></button>
      </fieldset>          
</form>
        </div>
       
<div id="inscrip" class="hidden animate">
    <?php 
       include'inscription.php'?>
</div>

      </section>
      <footer>
          
      </footer>

  <script type="text/javascript" src="js/accueil.js"></script>
</body>
</html>