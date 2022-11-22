<?php

//use database\DBConnection;

require_once 'DBConnection-test.php';

	
// 1 connexion a la bd

$db = new DBConnection('donkeycar', '127.0.0.1', 'root', '');
$reqsql = $db->getPDO()->query('SELECT * from fuel');
$fuels = $reqsql->fetchAll();
var_dump($fuels);
//die();


?>

<!DOCTYPE html>
<html lang="fr">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Réservation de voiture</title>
	<p>test connection à la bdd</p>
    </head>
    <body>

    </body>
</html>