<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=agenda','root','');


$pdoStat = $objetPdo->prepare('SELECT * FROM contact');

$executeIsOk = $pdoStat->execute();


//Récupération des resultats //

$contacts = $pdoStat->fetchAll();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des contacts</h1>

    <ul>
        <?php foreach ($contacts as $contact): ?>

            <li>
                
                <?= $contact['nom'] ?> <?= $contact['prenom'] ?> - <?= $contact['tel'] ?> - <?= $contact['mel'] ?>
                <a href="supprimer.php?numContact=<?= $contact['id'] ?> ">Supprimer</a>
                
            </li>
        <?php endforeach; ?>
    </ul>
    </body>
    </html>
               
                
