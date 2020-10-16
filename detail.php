<?php


$connect = new PDO("mysql:host=localhost;dbname=agenda;charset=utf8", "root", "");
$id = $_REQUEST["id"];
$id = intval($id);
$sql = $connect->prepare("SELECT id FROM contact WHERE id = :id");
$sql->bindParam(':id', $id);
$var = $sql->execute();
var_dump($var);


?>


<!DOCTYPE html>
<html lang="fr">
    <head>
            <title>Accueil</title>
            <meta charset="utf-8">
    </head>
    <body>
           


    </body>
</html>