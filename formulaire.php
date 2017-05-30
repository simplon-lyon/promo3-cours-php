<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
<!--Le PHP étant exécuté côté serveur, si on veut
lui envoyer des informations depuis le client, il
faudra faire une requête HTTP.
La seule manière d'envoyer une telle requête en
HTML reste les formulaire-->
    <form action="#" method="GET">
    <!--Les name des différents composants du form
    seront essentiels pour identifier les différentes
    input utilisateur pour le PHP-->
        <input type="text" name="test">
        <button>Envoyer</button>
    </form>
<?php
    // var_dump($_GET);

    $test = $_GET['test'];

    echo $test;

?>
    
</body>
</html>