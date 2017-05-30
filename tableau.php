<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau de chiffres</title>
</head>
<body>
<!--On ouvre et on ferme notre table en HTML 
directement-->
<table border="1">
<?php 
    $compteur = 0;
    //On fait une première boucle pour les tr
    for($x = 1; $x <= 10; $x++) {
        echo '<tr>';
        //et une seconde boucle pour les td
        for ($y=1; $y <= 10; $y++) {
            $compteur++;
            echo '<td>' . $compteur . '</td>';
        }
        //en oubliant pas de fermer le tr
        echo '</tr>';
    }
?>
</table>

<?php 
    //Permet de mettre le contenu d'un autre fichier
    //là où on met le include (warning si le fichier
    //n'est pas disponible)
    include('pyramide.php');
    //Pareil que include mais fatal error si le
    //fichier n'est pas disponible
    require('presentation.php');
    /*
    les _once font la même chose, mais si ils ont
    déjà été require ou include, alors ils ne
    seront pas re-include/require
    */
    include_once('pyramide.php');
    require_once('presentation.php');
?>
    
</body>
</html>