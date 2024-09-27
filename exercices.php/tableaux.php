<?php

/**Exercice 1 : Créer un tableau simple
 *  Objectif : Créez un tableau contenant les noms de vos cinq films préférés.
 *  Instructions :
 *  Déclarez le tableau avec les noms des films.
 *  Affichez chaque film sur une ligne séparée.
 */
echo '<h2> Exercice 1 : créer tableau simple </h2>';
$tab1 = ['titanic', 'kill bill', 'le seigneur des anneaux', 'le hobbit', 'a star is born'];

echo '<pre>';
var_dump($tab1);
echo '</pre>';

/** Exercice 2 : Ajouter et supprimer des éléments d'un tableau
 *   Objectif : Manipulez un tableau en ajoutant et en supprimant des éléments.
 *   Instructions :
 *   Créez un tableau avec quelques fruits.
 *   Ajoutez un fruit à la fin du tableau.
 *   Supprimez le premier fruit du tableau.
 *   Affichez le tableau modifié.
 */
echo '<h2> Exercice 2 : Ajout suppression tableau </h2>';

$tabFruit = ['ananas', 'poire', 'cerise', 'fraise', 'grenade', 'citron'];

$tabFruit[] = 'melon';

unset($tabFruit[0]);

echo '<pre>';
var_dump($tabFruit);
echo '</pre>';


/** Exercice 3 : Créer et afficher un tableau associatif
 *   Objectif : Travaillez avec un tableau associatif.
 *   Instructions :
 *   Créez un tableau associatif qui contient les informations suivantes : prénom, nom, et âge.
 *   Affichez chaque information avec une phrase descriptive.
 */

echo '<h2> Exercice 3 : créer et afficher un tableau associatif </h2>';

$assoTab = [
    'prenom' => 'jean',
    'nom' => 'dujardin',
    'age' => 50
];

echo "le prénom de cette personne est $assoTab[prenom], son nom de famille est $assoTab[nom] et il a $assoTab[age] ans";

/**Exercice 4 : Compter les éléments d'un tableau
 *  Objectif : Utilisez les fonctions count() et sizeof().
 *  Instructions :
 *  Créez un tableau avec plusieurs villes.
 *  Affichez le nombre d'éléments dans le tableau.
 */
echo '<h2> Exercice 4 : Compter elements tableau </h2>';

$villesTab = ['Paris', 'Milan', 'Madrid', 'Tokyo', 'New Dehli', 'Berlin', 'Kuala lampur', 'Dublin'];

echo "le tableau contient : " . count($villesTab) . ' villes ';

/** Exercice 5 : Créer un tableau multidimensionnel
 *   Objectif : Créez un tableau multidimensionnel et accédez à ses éléments.
 *   Instructions :
 *   Créez un tableau multidimensionnel avec des informations sur plusieurs étudiants : prénom, nom, et note.
 *   Affichez la note du premier étudiant.
 */
echo '<h2> Exercice 5 : créer tableau multidimensionnel </h2>';

$multiTab = [
    'etudiant1' => [
        'prenom' => 'Cedric',
        'nom' => 'Mathis',
        'note' => 14
    ],
    'etudiant2' => [
        'prenom' => 'Cynthia',
        'nom' => 'Piat',
        'note' => 17
    ],
    'etudiant3' => [
        'prenom' => 'Fanny',
        'nom' => 'Englist',
        'note' => 11
    ]
];

echo 'La note du premier étudiant est : ' . $multiTab['etudiant1']['note'];


/** Exercice 6 : Modifier un tableau multidimensionnel
 *   Objectif : Modifiez un tableau multidimensionnel.
 *   Instructions :
 *   Utilisez le tableau multidimensionnel créé dans l'exercice précédent.
 *   Changez la note du deuxième étudiant.
 *   Affichez toutes les informations du tableau modifié.
 */
echo '<h2> Exercice 6 : Modifier un tableau multidimensionnel </h2>';

$multiTab['etudiant2']['note'] = 16;

echo '<pre>';
var_dump($multiTab);
echo '</pre>';


/** Exercice 7 : Boucle for pour parcourir un tableau
 *   Objectif : Utilisez une boucle for pour parcourir un tableau.
 *   Instructions :
 *   Créez un tableau avec les mois de l'année.
 *   Utilisez une boucle for pour afficher chaque mois.
 */
echo '<h2> Exercice 7 : Boucle for pour parcourir un tableau </h2>';

$moisTab = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'];

for ($i = 0; $i < count($moisTab); $i++) {
    echo "<p> $moisTab[$i] </p>";
}

/** Exercice 8 : Boucle foreach pour parcourir un tableau associatif
 *   Objectif : Utilisez une boucle foreach pour parcourir un tableau associatif.
 *   Instructions :
 *   Créez un tableau associatif avec des noms d'animaux et leurs bruits (par exemple, "chien" => "aboiement").
 *   Utilisez une boucle foreach pour afficher chaque animal et son bruit.
 */
echo '<h2> Exercice 8 : Boucle foreach associatif </h2>';

$animaux = [
    'chien' => 'aboie',
    'chat' => 'miaule',
    'oiseau' => 'piaille',
    'cerf' => 'brame'
];

foreach ($animaux as $animal => $cri) {
    echo "<p> le $animal $cri </p>";
}




/** Exercice 9 : Rechercher une valeur dans un tableau
 *   Objectif : Cherchez une valeur spécifique dans un tableau.
 *   Instructions :
 *   Créez un tableau avec des numéros aléatoires.
 *   Cherchez si un numéro spécifique est présent dans le tableau.
 *   Affichez un message en fonction du résultat de la recherche.
 */
echo '<h2> Exercice 9 : Valeur dans un tableau </h2>';

$aleatNum = [44, 39, 685, 55, 242, 2, 4, 1, 77];

if (in_array(55, $aleatNum)) {
    echo '<p> Ce numéro est bien dans le tableau';
} else {
    echo '<p> Ce numéro n\'est pas dans le tableau';
}


/** Exercice 10 : Fusionner deux tableaux (Bonus)
 *   Objectif : Fusionnez deux tableaux en un seul.
 *   Instructions :
 *   Créez deux tableaux : un contenant des prénoms et un autre contenant des noms de famille.
 *   Fusionnez ces deux tableaux pour créer un tableau de noms complets.
 *   Affichez chaque nom complet sur une ligne.
 */
echo '<h2> Exercice 10 : Fusionner deux tableaux </h2>';

$prenomsTab = ['Max', 'Stephanie', 'Oceane', 'Alma', 'Sonia', 'Lisa', 'Mitra', 'Eric', 'Antoine'];
$nomsTab = ['Raspail', 'Dupont', 'Andrieux', 'Duhal', 'Dorval', 'Benguiz', 'Fanzy', 'Rabelais', 'Mozart'];

$nomsCompletsTab = array_map(function ($prenom, $nom) {
    return "$prenom $nom";
}, $prenomsTab, $nomsTab);

foreach ($nomsCompletsTab as $nomComplet) {
    echo "<p> $nomComplet </p>";
}
