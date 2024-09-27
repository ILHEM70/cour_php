<?php

// On peut récupérer les paramètres de la requete et les stocker si besoin
$request = http_build_query($_GET);

var_dump($_GET);
if (isset($_GET) && $_SERVER['REQUEST_METHOD'] === "GET") {
    switch ($_GET['color']) {
        case 'rouge':
            header("Location: page_produit.php?$request&img=robe_rouge");
            break;
        case 'violette':
            header("Location: page_produit.php?$request&img=robe_violette");
            break;
        case 'bleue':
            header("Location: page_produit.php?$request&img=robe_bleue");
            break;
        case 'jaune':
            header("Location: page_produit.php?$request&img=robe_jaune");
            break;
        default:
            header('Location: erreur.php?error_color=true');
            break;
    }
}
