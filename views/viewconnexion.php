<?php
require_once('C:\Users\sionp\Desktop\DonkeyCar\views\header.php');
require_once ('C:\Users\sionp\Desktop\DonkeyCar\userconnexion\login.php');
?>

<h1>Connexion</h1>
<form action="viewaccueil.php" method="POST">


    <label><b>Nom d'utilisateur</b></label>
    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

    <label><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

    <input type="submit" id='submit' value='LOGIN' >
</form>
</body>
</html>
