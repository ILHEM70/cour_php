<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php var_dump($_GET) ?>
    <div style="width: 400px;">
        <img src="./img/<?= isset($_GET['img']) ? htmlspecialchars($_GET['img'] . '.jpg') : ''; ?>" alt="robe" style="width:100%;">
    </div>
    <h1>page de la robe <?= isset($_GET['color']) ? htmlspecialchars($_GET['color']) : '"non spécifié"'; ?></h1>
    <p>Prix de la robe : <?= isset($_GET['prix']) ? htmlspecialchars(intval($_GET['prix'])) : "Aucun prix spécifié"; ?>€</p>
</body>

</html>