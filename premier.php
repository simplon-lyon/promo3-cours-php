<?php
    /*
    Les variables en php commencent toutes par un $
    Comme en js, elles sont dynamiquement typées
    */
    $maVariable = 'bloup';
    /*
    On utilise le echo pour afficher des trucs 
    (du html généralement)
    */
    echo 'un truc <br/>';

    echo maFonction("bloup");

    /*
    La fonction phpinfo() permet d'afficher nos informations
    de configuration php sur notre serveur
    */
    // phpinfo()

    /*
    La déclaration de fonctions en php se fait comme en js.
    */
    function maFonction($argument) {
        return $argument . 'kekchose';
    }


?>