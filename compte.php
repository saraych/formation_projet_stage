<?php
require 'pdo.php';

if (array_key_exists('user', $_SESSION) == false) {
    // l'utilisateur n'est pas connecté
    header('Location:inscription.php');
}

if (!empty($_POST)) { $req = $dbh->prepare('UPDATE user(name,pname,adress,city,postalCode,age,pseudo,mail,password) VALUES(
      :name, :pname, :adress, :city, :postalCode, :age, :pseudo, :mail, :password
    )');
   

    $req->execute([
        
        ':name' => $_POST['name'],
        ':name' => $_POST['name'],
        ':pname' => $_POST['pname'],
        ':adress' => $_POST['adress'],
        ':city' => $_POST['city'],
        ':postalCode'=>$_POST['postalCode'],
        ':age' => $_POST['age'],
        ':pseudo'=> $_POST['pseudo'],
        ':mail' => $_POST['mail'],
        ':password' => $_POST['password'],
        ':passwordcrypt' => crypt($_POST['password'], '$2a$07$302838711915bef2db65cc$'),
       
    ]);
}

/* L'utilisateur est connecté
echo 'L\'id utilisateur est';*/

  
/* echo $userId;
$req = $dbh->prepare('SELECT * FROM user WHERE id = :Id');
$req->execute([':Id' => $_SESSION['Id']]);
$res = $req->fetchAll();
echo '<pre>';
echo print_r($res);
echo '</pre>';*/ ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/compte.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  
   <div class="jj">
     
      <p class="animate">
      
      <button type="button" class="close">×</button>
       <?php 
         echo $message = 'Bienvenue '.$_SESSION['user']['name'];
       ?>
       </p>
       
    
   </div>
   <section id="first">
  <header class="home">
            <nav id="nav_commun">


                <ul id="nv">
                    <li class="test">Mon compte </li>
                    <li><a href="accueil.php">Accueil</a></li>

                    <li><a href="./logout.php">Deconnexion</a></li>

                </ul>
            </nav>

        </header>
    

   </section>
   <section id='second'>
      <form  class="form" action="inscription.php">
          
      </form>
       
       
   </section>
    
  <script type="text/javascript" src="js/compte.js
  "></script>
</body>
</html>