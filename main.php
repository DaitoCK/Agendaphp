<?php

/*ouverture de la connexion à la base de données */

$objetPdo = new PDO('mysql:host=localhost;dbname=agenda','root','');

/*Requette d'insertion (sql)*/


$pdoStat = $objetPdo->prepare('INSERT INTO contact VALUES (NULL, :nom, :prenom, :tel, :mel)');

//*on lie chaque marqeur à une valeur */

$pdoStat->bindValue(':nom', $_POST['LastName'], PDO::PARAM_STR);

$pdoStat->bindValue(':prenom', $_POST['firstName'], PDO::PARAM_STR);

$pdoStat->bindValue(':tel', $_POST['phone'], PDO::PARAM_STR);

$pdoStat->bindValue(':mel', $_POST['mail'], PDO::PARAM_STR);

//*éxécution de la requete préparée */ 

$insertIsOk = $pdoStat->execute();


if($insertIsOk){
    
    $message = 'Le contact a été ajouté dans la bdd';
}

    else{
        $message = 'Echech de l\'insertion';
    }
    
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Insertion des contacts</h1>

<p><?php echo $message; ?></p>



</body>
</html>



