<?php

    //Version EZ
    $etages = 5;
    //On calcul la taille des étages qui vaut le nombre d'étages
    //multiplié par 2 moins 1
    $tailleEtage = $etages*2 - 1;
    //On fait une boucle en se basant sur note nombre d'étages
    for ($x=1; $x <= $etages ; $x++) { 
        /*On calcul le nombre d'espaces avant les étoiles
        (il s'avère que c'est le nombre d'étages moins
        l'étage auquel on se trouve actuellement)
        */
        $nbEspaces = $etages - $x;
        /*
        On calcul le nombre d'étoile, qui se trouve être
        le reste une fois qu'on a soustrait le nombre d'espaces
        fois 2 à la taille des étages.
        */
        $nbEtoiles = $tailleEtage - $nbEspaces*2;
        //On affiche les espaces et es étoiles avec un
        //echo et un str_repeat()
        echo str_repeat('_', $nbEspaces);
        echo str_repeat('*', $nbEtoiles);
        //On saute une ligne
        echo '<br/>';
    }
?>



