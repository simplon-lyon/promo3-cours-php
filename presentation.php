<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Présentation</title>
</head>
<body>
    <?php 
        $nom = 'jean louis';
        //On peut echo du code html directement
        echo '<p>' . $nom . '</p>';

        //On peut ouvrir un block php dans une
        //balise php...
        if($nom == 'jean louis') {
    ?>
    <!--On peut également faire du html classique
    et y insérer une balise php pour afficher
    une variable par exemple.-->
    <p><?php echo $nom; ?></p>
    
    <?php //...et le refermer dans une autre balise 
        }
     ?>
     
     <?php 
        for ($i=1; $i <= 10 ; $i++) { 
            echo "<p>$i</p>";
        }
     ?>

     <?php
        for ($i=1; $i <=10 ; $i++) { 
     ?>
        <p><?php echo $i ?></p>
        <?php } ?>
</body>
</html>