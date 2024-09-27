<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fomrulaire 2</title>
</head>

<body>
    <h1>Formulaire 2</h1>




 
    <form action="traitement.php" method="POST">
        <label for="prenom">Prénom</label>
        <input type="text" id="nom" name="prenom">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">

        <label for="adresse">Votre adresse</label>
        <textarea name="adresse" id="adresse"></textarea>
        <label for="ville">Ville</label>
        <input type="text" id="ville" name="ville">
        <input type="submit" value="Envoyer le formulaire" name="form_post">
    </form>

</body>

</html>