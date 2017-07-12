<?php
   require ("pdo.php");
    //extract($_POST);
  //  var_dump($_SESSION);

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
    $res = $req->fetch();
    header('location:accueil.php');
    var_dump($_SESSION);
    
        
    }
?>
                  <form class="for" action="inscription.php" method="POST">
 <div class="form-group">
               
   <button type="button" class="clo">×</button><br/>
                <div class="titre">
                    <h2> Inscrivez-vous</h2>
                </div>

                <input type="text" name="name" placeholder="Nom" required pattern="[a-zA-Z0-9-]+">
                <input type="text" name="pname" placeholder="Prenom" required pattern="[a-zA-Z0-9-]+">
                <input type="text" name="pseudo" placeholder="Identifiant" required maxlength="20" pattern="[a-zA-Z0-9-_\.]{1,20}$">

                <input type="password" name="password" placeholder="Mot de passe " required>
                <input type="text" name="mail" placeholder="E-mail" required pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                <button type="submit" class="bouton"> Inscription </button>
        
</div>
        </form>

<script type="text/javascript" src="js/ins.js">
</script>
 