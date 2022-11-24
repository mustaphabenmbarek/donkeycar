<?php 
  @$keywords=$_GET["keywords"];
  @$valider=$_GET["valider"];
    if(isset($valider) && !empty(trim($keywords))){
  include("");
  $res=$pdo->prepare("SELECT * FROM mark where mark like ? '%$keywords%");
  $res->setFetchmod;
    }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="GET">
            <input type="search" name="keywords" placeholder="Recherche..." />
            <input type="submit" name="Valider" value="Recherher" />
         </form>
         <div class ="resultat">
            <div class="nbr">
                <ol>
                    <li>resultat</li>
                </ol>
            </div>
         </div>

        <div id="container">
        <?php
        session_start();
        if($_SESSION['username'] !== ""){
        $user = $_SESSION['username'];
        // afficher un message
        echo "Bonjour $user, vous êtes connecté";
        }
        ?>

        

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="verification.php" method="POST">
        <h1>Connexion</h1>
        
        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
    
        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>
    
        <input type="submit" id='submit' value='LOGIN' >
        <?php
        if(isset($_GET['erreur'])){
        $err = $_GET['erreur'];
        if($err==1 || $err==2)
        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
    ?>
</body>
</html>
