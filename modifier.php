<?php
var_dump($_POST);

$connect = new PDO('mysql:host=localhost;dbname=agenda','root','');

$pdoStat = $connect->prepare('UPDATE contact set nom=:nom, prenom=:prenom, tel=:tel, mel=:mel 
WHERE id=:num LIMIT 1 ');

$pdoStat->bindValue(':num', $_POST['numContact']);
$pdoStat->bindValue(':nom', $_POST['LastName']);
$pdoStat->bindValue(':prenom', $_POST['firstName']);
$pdoStat->bindValue(':tel', $_POST['phone']);
$pdoStat->bindValue(':mel', $_POST['mail']);


$executeIsOk = $pdoStat->execute();


if($executeIsOk){

    $message = 'Le contact a été modifier dans la bdd';
}

else{
    $message = 'Echec de la modification';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Modification : résultat</title>
</head>
<body>

<h1>Résultat de la modification</h1>

<p><?php echo $message; ?></p>



</body>
</html>

