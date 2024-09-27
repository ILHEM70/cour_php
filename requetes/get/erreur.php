<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= isset($_GET['error_color']) && $_GET['error_color'] ? 'Vous avez touché aux paramètres et retiré les couleurs ! ' : ''; ?></h1>
</body>

</html>