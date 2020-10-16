<?php
$bdd = new PDO("mysql:host=localhost;dbname=agenda;charset=utf8", "root", "");
if(isset($_GET['id']) AND !empty($_GET['id'])) {
   $get_id = htmlspecialchars($_GET['id']);
   $pdoStat = $objetPdo->prepare('SELECT * FROM contact WHERE id = ?');
   $pdoStat->execute(array($get_id));
   
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
            <title>Accueil</title>
            <meta charset="utf-8">
    </head>
    <body>
            <h1><?= $titre ?></h1>
            <p><?= $contenu ?></p>
    </body>
</html>