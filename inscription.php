<?php

      require ('pdo.php');
      extract($_POST);
      var_dump($_SESSION);


if (!empty($_POST))
    {    
        $name = $_POST['name'];
        $pname = $_POST['pname'];
        $pseudo= $_POST['pseudo'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $passwordcrypt = crypt($_POST['password'], '$2a$07$302838711915bef2db65cc$');
       
        $req = $dbh->prepare("INSERT INTO user(name, pname, pseudo, mail, password)VALUES(:name, :pname, :pseudo, :mail, :password)");
        
       
   
       /* $req = $dbh->prepare('INSERT INTO user (name, pname, pseudo, mail, password) VALUES (:name,  :pname, :pseudo, :mail, :password)');
        */
        $req->bindValue(":name", $name,PDO::PARAM_STR);
        $req->bindValue(":pname", $pname,PDO::PARAM_STR);
        $req->bindValue(":pseudo", $pseudo,PDO::PARAM_STR);
        $req->bindValue(":mail", $mail,PDO::PARAM_STR);
        $req->bindValue(":password",$passwordcrypt,PDO::PARAM_STR);
       
      $req->execute();
      $res = $req->fetchAll();
    
        echo "name = " .$name;
        echo "<br/>pname = " .$pname;
        echo "<br/>pseudo=".$pseudo;
        echo "<br/>mail=".$mail;
        echo"<br/>password=".$passwordcrypt;

     header('location:accueil.php');
    }
?>
    <div class="loginimage" text-center>
        <div class="ligne">
            <h2>Inscrivez- vous</h2>
        </div>
        <div class="groupicon">
            <ul>
                <li class="gary">
                    <a href="https://www.facebook.com/">
                        <span class="icon-fb">
                    <i class="fa fa-facebook-square gigi" aria-hidden="true"></i>
                </span>
                    </a>
                </li>
                <li class="gary">
                    <a href="https://accounts.google.com">
                        <span class="icon-gmail"><i class="fa fa-google-plus-square gigi" aria-hidden="true"></i></span>
                    </a>
                </li>
                <li class="gary">
                    <a href="https://www.linkedin.com">
                        <span class="icon-linkedin"><i class="fa fa-linkedin-square gigi" aria-hidden="true"></i></span>
                    </a>
                </li>
                <li class="gary">
                    <a href="https://twitter.com">
                        <span class="icon-twitter"><i class="fa fa-twitter-square gigi" aria-hidden="true"></i></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="logintext">
        <form class="for" action="inscription.php" method="POST">
            <div class="form-group">

                <button type="button" class="clo">×</button><br/>
                <span><i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" class="login-input m" name="name" placeholder="Nom" required pattern="[a-zA-Z0-9-]+">
                <span><i class="fa fa-user" aria-hidden="true"></i></span> <input type="text" name="pname" class="login-input m" placeholder="Prenom" required pattern="[a-zA-Z0-9-]+">
      
                <span><i class="fa fa-user" aria-hidden="true"></i></span> <input type="text" name="pseudo" class="login-input m" placeholder="Identifiant" required maxlength="20" pattern="[a-zA-Z0-9-_\.]{1,20}$">
                
                <span><i class="fa fa-envelope" aria-hidden="true"></i></span><input type="text" name="mail" class="login-input m" placeholder="E-mail" required pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">


                <span><i class="fa fa-unlock-alt" aria-hidden="true"></i></span><input type="password" class="login-input m" name="password" placeholder="Mot de passe " required>
                <input class="submit-login" type="submit" value="Inscription">
            </div>

        </form>
    </div>

    <script type="text/javascript" src="js/ins.js">
    </script>