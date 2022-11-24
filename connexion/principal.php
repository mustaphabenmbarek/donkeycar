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
