<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Ajouter un contact</h1>

    <form action="main.php" method="post">



            <p>
                <label for="nom">Nom</label>

                <input id="nom" type="text" name="firstName">

            </p>

            <p>
                
                <label for="prenom">Prenom</label>

                <input type="text" id="prenom" name="LastName">

            </p>  
            
            <p>
                
                <label for="tel">Téléphone</label>

                <input type="text" id="tel" name="phone">

            </p>    

            <p>
                
                <label for="mel">Adresse électronique</label>

                <input type="email" id="mel" name="mail">

            </p>    

            <p><input type="submit" value="Enregistrer"></p>

    </form>
    
</body>
</html>