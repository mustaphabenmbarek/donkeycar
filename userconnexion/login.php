<?php

require '../DBConnection-test.php';

if(!empty($_POST['username']) && !empty($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    var_dump($username);
    var_dump($password);

    $c = $bd->prepare('SELECT * FROM users WHERE username = :username ');
    $c->bindValue('username',$username);
    $c->execute();
    $res = $c ->fetch(PDO::FETCH_ASSOC);

    var_dump($res);

    if ($res){
        $passwordHash = $res ['password'];
        if(password_verify($password, $passwordHash))
        echo "connecté";
    } else{
        echo "identifiant ou mot de passe invalide";
    }
}