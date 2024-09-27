<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 10;
    $b = 5;
    $c = 2;

    if ($a > $b) {
        echo "$a est superieur à $b";
    } else {
        echo "$b est superieur à $a";
    }

    if ($a < $c) {
        echo " $a est inferieur à $c <br>";
    }
    // pareil pour $b et $c

    if ($b > $c) {
        echo "$b est superieur à $c";
    } else {
        echo "$b est superieur à $c";
    }










    // l'operateur && vérifie que les deux conditions sont vraies.Si une est fausse sa rentre dans le else 
    if ($a > $b && $b > $c) {
        echo "$a est superieur à $b et $b et superieur à $c <br>";
    } else {
        echo "L'une des deux conditions ne sont respectées <br>";
    }






    // L'operateur || vérifie que au moin l'une des deux condition est vraie, si une seule est vrai, alors il rentre.

    if ($a == 10 || $c > $b || $a < $c || $b > $c) {
        echo " une ou plusieur conditions sont vraies <br>";
    } else {
        echo " Aucune condition n'est vraie";
    }



    // l'operateur XOR : opérateur exlusif
    // Seulement une des deux condition doit etre vraie (soit l'une soit l'autre)

    if ($a == 10 xor $b == 5) {
        echo " l'une des deux est vraie <br>";
    } else {
        "les deux sont vraies ou fausses <br>";
    }

    //Les ternaire:
    // ($a == 10 ) = if ($a == $b){
    // echo "$a est égale à 10";
    // }else{
    // echo "$a n'est pas égale a 10";
    // }
    echo '( $a == 10) ? $a est égale à 10 : $a n\'est pas égal à 10';

    $condition = ($a == 10) ? '$a est égal à 10' : 11;
    echo "$condition <br>";



    // = Affectation d'une valeur à une variable ( exemple $a = 10)
    // == Comparaison des valeurs (variable ou non)
    // === Comparaison stricte ( valeurs et types )

    $dix = 10;
    $dixStr = '10';
    if ($dix == $dixStr) {
        // il rentre ici car ==  ne compare que la valeur (les deux ont la meme valeur de dix)
        echo ' oui <br>';
    } else {
        echo ' non <br>';
    }

    if ($dix === $dixStr) {
        // il ne  rentre pas ici car ===   compare  la valeur et le type  (les deux ont la meme valeur de dix mais pas le même type )
        echo ' oui <br>';
    } else {
        echo ' non <br>';
    }
    // isset() et empty() : 
    // isset() vérifie qu'une variable est définie peut importe la valeur sauf nul
    $prenom = null;
    if (isset($prenom)) {
        echo 'prenom existe <br>';
    } else {
        echo 'prenom n\'existe pas';
    }

    echo '(isset($prenom)) ? prenom existe <br> : prenom n\'existe pas <br>';


    // empty()

    $zero1 = 0;
    $str = '';
    $false = false;
    $tab = [];
    $prenom = null;

    echo empty($zero1) ? 'zero1 est vide <br>' : 'zero1 n\'existe pas vide <br>';
    echo empty($str) ? 'str est vide <br>' : 'str est rempli <br>';
    echo empty($false) ? 'false est vide <br>' : 'false est rempli <br>';
    echo empty($tab) ? 'tab est vide <br>' : 'tab est rempli <br>';
    echo empty($prenom) ? 'prenom est vide <br>' : 'prenom est rempli <br>';

    // ! indique la negation :
    if (!$false) {
        echo ' on rentre dans cette codition (if <br>';
    } else {
        echo ' on retre dans le else';
    }


    // ?? 
    $var1 =  $variableInexistante ?? $prenom ?? 'valeur par defaut';
    echo "$var1 <br>";


    // SWITCH
    $jourSemaine = 'Dimanche';

    switch ($jourSemaine) {
        case 'Lundi':
            echo 'le jour est Lundi';
            break;
        case 'Mardi':
            echo 'le jour est Mardi';
            break;
        case 'Mercredi':
            echo 'le jour est Mercredi';
            break;
        case 'Jeudi':
            echo 'le jour est Jeudi';
            break;
        case 'Vendredi':
            echo 'le jour est Vendredi';
            break;
        case 'Samedi':
            echo 'le jour est Samedi';
            break;
        case 'Dimanche':
            echo 'le jour est Dimanche';
            break;

        default:
            echo 'Aucun jour de la semaine trouvé <br>';
    }

    // même chose que le switch mais en if

    if ($jourSemaine == 'Lundi') {
        echo 'le jour est Lundi <br>';
    } else if ($jourSemaine == 'Mardi')
        echo 'Le jour est Mardi <br>';
    else if ($jourSemaine == 'Mercredi') {
        echo 'Le jour est Mercredi <br>';
    } else if ($jourSemaine == 'Jeudi') {
        echo 'Le jour est Jeudi <br>';
    } else if ($jourSemaine == 'Vendredi') {
        echo 'Le jour est Vendredi <br>';
    } else if ($jourSemaine == 'Samedi') {
        echo 'Le jour est Samedi <br>';
    } else if ($jourSemaine == 'Dimanche') {
        echo 'Le jour est Dimanche <br>';
    } else {
        echo 'Aucune condition n\'a été remplie <br>';
    }

    //pareil pour $b et$c






    ?>
</body>

</html>