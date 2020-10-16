<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=agenda','root','');


$pdoStat = $objetPdo->prepare('DELETE FROM contact WHERE id=:num');


$pdoStat->bindValue(':num', $_GET['numContact'],PDO::PARAM_INT);


$executeIsOk = $pdoStat->execute();

if($executeIsOk){
    
    $message = 'Le contact a été supprimé';
}

    else{
        $message = 'Echec de la suppression du contact';
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

<h1>Suppressions</h1>
<p><?= $message ?></p>
    
</body>
</html>