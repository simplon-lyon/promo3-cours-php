<?php
    /*
    Les sessions vont permettre de stocker des informations
    côté serveur qui seront liées à un utilisateur
    spécifique.
    Pour pouvoir commencer à utiliser la session 
    (en créer une nouvelle ou récupérer une existante)
    on doit commencer par utiliser la fonction
    session_start()
    */
    session_start();
    /*
    On peut ensuite utiliser la superglobale 
    $_SESSION qui est un array associatif (un
    array avec des clefs textuelles, comme 
    $_GET et $_POST) dans lequel on pourra 
    stocker des valeurs pour l'utilisateur
    courant. Ces valeurs seront accessibles
    depuis d'autres pages de notre application.
    */
    $_SESSION['truc'] = 'bloup';

?>