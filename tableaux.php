<?php

$tab = ['Amine', 'Maxime', 'Gustave', 'Jawad', 'Ilhem', 'Gregory', 'Patrique', 'Kevin', 'Nolan', 'Serine', 'Chayma', 'Enzo'];
$tab1 = array('Amine', 'Maxime', 'Gustave', 'Jawad', 'Ilhem', 'Gregory', 'Patrique', 'Kevin', 'Nolan', 'Serine', 'Chayma', 'Enzo');


echo '<br>';

// Affiche le contenu du tableau avec tout les détails
var_dump($tab);

// Affiche le contenu du tableau sans les détails
print_r($tab);

echo '<br>';

//echo gettype($tab) = array;
echo gettype($tab);

// Ajouter au tableau
$tab[] = 'Mitra';

echo '<pre>';
var_dump($tab);
echo '<pre>';

echo '<br>';
echo $tab[4];
$tab[4] = 'Ilem2';

echo '<pre>';
var_dump($tab);
echo '<pre>';



// Tableau associatifs


$eleve = [
    'nom' => 'X',
    'prenom' => 'Gustave',
    'age' => 22,
    'estContentAujoud\'hui' => true
];



$eleve2 = ['nom' => 'X', 'prenom' => 'Gustave', 'age' => 22, 'estContentAujoud\'hui' => true];


//On vise directement la clé du tableau pour l'afficher
echo $eleve['prenom'];
echo $eleve['age'];



// Onpeut compter le nombre d'éléments avec count() ou sizeOf().
echo '<br>';
echo 'La taille du tableau $tab avec count est de : ' . count($tab) . '<br>';
echo 'La taille du tableau $tab avec count est de : ' . sizeof($tab) . '<br>';

// Tableau multidimentionnel : 
$multiTab = [
    0 => [
        'prenom' => 'Sirine',
        'nom' => 'Y',
        'telephone' => '07 23 20 21 11'
    ],
    1 => [
        'prenom' => 'Ilhem',
        'nom' => 'N',
        'telephone' => '06 22 30 21 71'
    ],
    2 => [
        'prenom' => 'Jawad',
        'nom' => 'M',
        'telephone' => '07 29 53 21 13'
    ],
    3 => [
        'prenom' => 'Maxime',
        'nom' => 'O',
        'telephone' => '06 33 25 11 17',
    ]

]; // Le nom des index( clés) est libre.

echo $multiTab[1]['nom']; // On recupère le nom qui se trouve dans le tableau ayant la clé 1 dans notre tableau multiTab.



// pour afficher tout les prénom par exemple de notre tableau multiTab, on va boucler avec for.


echo '<h2> Boucle for </h2>';




for ($i = 0; $i < count($multitab); $i++) {

    //A chaque tour, il affichera le prénom du tableau dans lequel il se trouve
    echo $multitab[$i]['prenom'] . '<br>';
}

echo '<br>';


//BOUCLE FOREACH

foreach ($multitab as $tableau) {
    echo $tableau['prenom'] . '<br>';
};
