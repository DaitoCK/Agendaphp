<?php

$connect = new PDO('mysql:host=localhost;dbname=agenda','root','');


$pdoStat = $connect->prepare('SELECT * FROM contact');

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
                <a href="detail.php?id=<?= $contact['id'] ?>">
                    <?= $contact['nom'] ?> <?= $contact['prenom'] ?> -
                    <?= $contact['tel'] ?> - <?= $contact['mel'] ?>
                </a>


                <a href="supprimer.php?numContact=<?= $contact['id'] ?> ">Supprimer</a>
                <a href="form_modification.php?numContact=<?= $contact['id'] ?> ">Modifier</a>
        
                
            </li>
        <?php endforeach; ?>
    </ul>
    </body>
    </html>
               
                
