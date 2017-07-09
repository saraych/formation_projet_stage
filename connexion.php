<?php
        require ('pdo.php');
        extract($_POST);
        var_dump($_SESSION);

  if (!empty($_POST)){
        $pseudo = $_POST['pseudo'];
        $password=$_POST['password'];
        $passwordcrypt = crypt($_POST['password'], '$2a$07$302838711915bef2db65cc$');
        $req = $dbh->prepare("SELECT * FROM user WHERE pseudo = :pseudo AND password = :password");
    
        $req->bindValue(":pseudo",$pseudo, PDO::PARAM_STR);
        $req->bindValue(":password", $passwordcrypt, PDO::PARAM_STR);
        $req->execute();
        $res = $req->fetch();
      
    if ($passwordcrypt == $res['password'])
    {                                                                     echo 'Password is valid!';
          $_SESSION['user'] = 
              [
              'name' => $name              
                ];
     if(array_key_exists('user', $_SESSION) == true)
     {
         
     }
          var_dump($_SESSION);
          echo $res['pseudo']." "." Vous etes connecté!";
     
          header('location:accueil.php');
    }
    else 
    { 
        echo 'Invalid password.'; 
    };


      
/* if ($res = $req->fetch()) 
 { 
     $_SESSION['connected'] = true;
     $_SESSION['id'] = $res['Id_user']; 
     var_dump($_SESSION);
     echo $res['pseudo']." "." Vous etes connecté!";
     echo $_SESSION['id'];}*/ }?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <title>Connexion
        </title>
        <link rel="stylesheet" href="Css/form.css">
    </head>

    <body>
        <form action="connexion.php" method="POST" class="form">
            <fieldset>
                <div class="form-group">
                    <div class="col-xs-6">
                        <h2> Identifiez-vous</h2>
                        <input type="text" name="pseudo" placeholder="Pseudo">
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Mot de passe "></div>

                    <input type="submit" class="bouton" value="Connexion">
                   
                     <li><a href="logout.php">Deconnexion</a></li>
                </div>

            </fieldset>

        </form>


    </body>

    </html>