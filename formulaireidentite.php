<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire identite</title>
</head>
<body>

<form action="ficheidentite.php" method="POST">
    <label>Nom :</label>
    <input type="text" name="nom">
    <label>Prénom :</label>
    <input type="text" name="prenom">
    <label>Age :</label>
    <input type="number" name="age">
    <label>Région :</label>
    <select name="region" id="region">
        <option>Rhone alpes</option>
        <option>Ile de france</option>
        <option>Bretagne</option>
    </select>
    <p>je préfère les :</p>
    <label>Chiens</label>
    <input type="radio" name="preference" value="chiens">
    <label>Chats</label>
    <input type="radio" name="preference" value="chats">
    <button>Envoyer</button>
</form>
    
</body>
</html>