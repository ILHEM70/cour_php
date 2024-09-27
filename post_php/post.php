<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="inscription.php">Page d'inscription</a>


    <form action="traitement.php" method="POST">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom">

        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
        <input type="submit" value="Envoyer le formulaire" name="form_post">
    </form>
</body>
</html>