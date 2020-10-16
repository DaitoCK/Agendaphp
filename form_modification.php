
<?php

$connect = new PDO('mysql:host=localhost;dbname=agenda','root','');

$pdoStat = $connect->prepare('SELECT * FROM contact WHERE id = :num');

$pdoStat->bindValue(':num', $_GET['numContact'],PDO::PARAM_INT);

$executeIsOk = $pdoStat->execute();


$contact = $pdoStat->fetch();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <title>Form modification</title>
</head>
<body>
<h1>Modifier un contact</h1>

<form action="modifier.php" method="post">

    <input type="hidden" name="numContact" value="<?=$contact['id'] ?>">
    <p>
        <label for="nom">Nom</label>
        <input id="nom" type="text" name="firstName" value="<?= $contact['nom'];?>">
    </p>

    <p>
        <label for="prenom">Prenom</label>
        <input type="text" id="prenom" name="LastName" value="<?= $contact['prenom'];?>">
    </p>

    <p>
        <label for="tel">Téléphone</label>
        <input type="text" id="tel" name="phone" value="<?= $contact['tel'];?>">
    </p>

    <p>
        <label for="mel">Adresse électronique</label>
        <input type="email" id="mel" name="mail" value="<?= $contact['mel'];?>">
    </p>

    <p><input type="submit" value="Enregistrer modifications"></p>

</form>


</body>
</html>
