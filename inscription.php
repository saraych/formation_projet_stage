<?php
    require ("pdo.php");
    extract($_POST);

if (!(empty($_POST)))
    {    
        $name = $_POST['name'];
        $pname = $_POST['pname'];
        $adress = $_POST['adress'];
        $city = $_POST['city'];
        $postalCode = $_POST['postalCode'];
        $age = $_POST['age'];
        $pseudo= $_POST['pseudo'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $passwordcrypt = crypt($_POST['password'], '$2a$07$302838711915bef2db65cc$');
       
        
   
   $req = $dbh->prepare('INSERT INTO user(name,pname,adress,city,postalCode,age,pseudo,mail,password) VALUES(
      :name, :pname, :adress, :city, :postalCode, :age, :pseudo, :mail, :password
    )');
        
     $req->bindValue(":name",$name,PDO::PARAM_STR);
     $req->bindValue(":pname",$pname,PDO::PARAM_STR);
     $req->bindValue(":adress",$adress,PDO::PARAM_STR);
     $req->bindValue(":city",$city,PDO::PARAM_STR);
     $req->bindValue(":postalCode",$postalCode,PDO::PARAM_INT);
     $req->bindValue(":age",$age,PDO::PARAM_INT);
     $req->bindValue(":pseudo",$pseudo,PDO::PARAM_STR);
     $req->bindValue(":mail",$mail,PDO::PARAM_STR);
    /* $req->bindValue(":password",$passwordhash,PDO::PARAM_STR);*/
     $req->bindValue(":password",$passwordcrypt,PDO::PARAM_STR);
     
        echo "name = " .$name;
        echo "<br/>pname = " .$pname;
        echo "<br/>adress = " .$adress;
        echo "<br/>city = " .$city;
        echo "<br/>postalCode = ".$postalCode;
        echo "<br/>age=".$age;
        echo "<br/>pseudo=".$pseudo;
        echo "<br/>mail=".$mail;
        echo"<br/>password=".$passwordcrypt;
        
    $req->execute();
        
    }
?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <title>Inscription</title>
        <link rel="stylesheet" href="Css/inscription.css">
    </head>

    <body>
        <form class="for" action="inscription.php" method="POST">

            <fieldset>
                <div class="titre">
                    <h2> Inscrivez-vous</h2>
                </div>

                <input type="text" name="name" placeholder="Nom" required pattern="[a-zA-Z0-9-]+">
                <input type="text" name="pname" placeholder="Prenom" required pattern="[a-zA-Z0-9-]+">
                <input type="text" name="adress" placeholder="Adresse">
                <input type="text" name="city" placeholder="Ville">
                <input type="text" name="postalCode" placeholder="Code postal">
                <input type="number" name="age" placeholder="Age">
                <input type="text" name="pseudo" placeholder="Pseudo" required maxlength="20" pattern="[a-zA-Z0-9-_\.]{1,20}$">

                <input type="password" name="password" placeholder="Mot de passe " required>
                <input type="text" name="mail" placeholder="E-mail" required pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                <button type="submit" class="bouton"> Inscription </button>
            </fieldset>

        </form>


    </body>

    </html>