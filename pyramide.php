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

    $pyramide = [];
    //Version tableau multidimensionnel (un peu compliké)
    for ($x=1; $x <= $etages ; $x++) { 
        $ligne = [];

        $nbEspaces = $etages - $x;
        $nbEtoiles = $tailleEtage - $nbEspaces*2;

        for ($y=1; $y <= $tailleEtage ; $y++) { 
            if($y <= $nbEspaces) {
                array_push($ligne, '_');
            } elseif( $y <= $nbEspaces+$nbEtoiles) {
                array_push($ligne, '*');
            }
        }

        $pyramide[$x-1] = $ligne;
        
    }
    /*
    Le foreach en php nous permet d'itérer sur des array,
    il prend en premier argument l'array sur lequel itérer
    suivi du mot clef as puis du nom de la variable qui sera
    disponible au sein de la boucle
    Si on veut également avoir accès à la clef/index, on utilisera
    la notation ($tableau as $clef=>valeur) au lieu de
    ($tableau as $valeur)
    */
    foreach($pyramide as $ligne) {
        foreach($ligne as $caractere) {
            echo $caractere;
        }
        echo '<br/>';
    }
 
    
    for ($i=0; $i < count($pyramide); $i++) { 
        # code...
    }
?>



