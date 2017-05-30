<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiche identité</title>
</head>
<body>

    <?php
        /*
        On vérifie d'une manière ou d'une autre
        si un des champs existe, si ça n'est pas
        le cas, on affiche un message disant que
        le formulaire n'a pas été entré
        */
        if(!isset($_POST['nom'])) {
        // if(empty($_POST['nom'])) {
            echo '<p>fiche non renseignée</p>';
            //Sinon on affiche les informations contenues
            //dans le $_POST avec moult concaténations.
        } else {
            echo '<h1>' . $_POST['nom'] 
            .' '. $_POST['prenom'] . '</h1>';
            echo '<p>j\'ai ';
            echo $_POST['age'];
            echo ' ans et je vis en région ';
            echo $_POST['region'];
            echo ', j\'aime les ';
            echo $_POST['preference'];
            echo '</p>';
        }


    ?>
    
</body>
</html>