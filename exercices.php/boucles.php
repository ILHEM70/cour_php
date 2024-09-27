<?php


echo '<h2> exercice 1 </h2>';
// Afficher toutes les réponses

/** Exercice 1 : Boucle while basique
 * 
 *  Objectif : Créer une boucle while qui affiche les nombres pairs de 0 à 20
 * 
 */


$i = 0;

while ($i <= 20) {
    echo "$i  <br>";
    $i += 2;
}


echo '<h2> exercice 2 </h2>';

/** Exercice 2 : Générer une liste d'années avec une boucle while
 * 
 *  Ojectif : Afficher les années de 2000 à l'année actuelle (qui doit être incluse) dans une liste non ordonnée (<ul>)
 * 
 */

$i = 2000;

while ($i <= 2024) {
    echo " <ul>$i</ul> <br>";
    $i++;
}



echo '<h2> exercice 3 </h2>';


/** Exercice 3 : Boucle do...while
 * 
 *  Objectif : Utiliser une boucle do...while pour afficher les multiples de 3 inférieurs à 30. S'assurer que le premier multiple est affiché même si la condition n'est pas remplie
 * 
 * 
 */

$j = 0;
do {
    echo $j += 3, '<br>';
} while ($j < 30);





echo '<h2> exercice 4 </h2>';
/** Exercice 4 : Boucle for
 * 
 *  Objectif : Créer une boucle for qui affiche une table de multiplication (de 1 à 10) pour un nombre donné
 * 
 */

$num = 4;
for ($i = 0; $i <= 10; $i++) {
    echo $i * $num . '<br>';
}


echo '<h2> exercice 5 </h2>';
/** Exercice 5 : Boucles imbriquées pour créer une grille
 * 
 *  Objectif : Créer une boucle for qui affiche une grille de 5x5 dans un tableau html (<table>).
 *             Chaque cellule doit contenir les coordonnées de la cellule (par exemple (1,1) pour la première cellule)
 * 
 */

echo '<table><tbody>'; // Table HTML

for ($i = 1; $i <= 5; $i++) { // Premiere boucle elle crée un tr
    echo "<tr>";

    for ($j = 1; $j <= 5; $j++) { // second boucle, la seconde fait ses 5 tours
        echo "<td>($i,$j)</td> ";
    } // on ferme le tr à la fin de la seconde boucle


    echo "</tr>";
}
echo '</table></tbody>'; //on oublie pas de fermer la balise HTML


echo '<h2> exercice 6 </h2>';
/** Exercice 6 : foreach pour un tableau associatif
 * 
 *  Objectif : Créer un tableau associatif avec les informations suivantes : 'prenom','nom','email','age'
 *             Afficher chaque information sous la forme clé : valeur dans des paragraphes, l'email doit être dans un lien (<a>)
 * 
 */


$personne = [
    'prenom' => 'Jean',
    'nom' => 'Dupont',
    'email' => 'jean.dupont@yahoo.com',
    'age' => 30
];


echo "<p>Prénom : " . $personne['prenom'] . "</p>";
echo "<p>Nom : " . $personne['nom'] . "</p>";
echo "<p>Email : <a href='mailto:" . $personne['email'] . "'>" . $personne['email'] . "</a></p>";
echo "<p>Âge : " . $personne['age'] . " ans</p>";



echo '<h2> exercice 7 </h2>';


/** Exercice 7 : Foreach avec des clés personnalisées
 *  
 *  Objectif : Créer un tableau associatif représentant un menu de navigation, les clés seront les titres des pages ('accueil','produits','contact') et les valeurs les liens correspondants.
 * 
 * Afficher chaque element du menu sous forme de liens (<a>)
 * 
 * 
 */


$menu = [
    'Accueil' => 'index',
    'Produits' => 'produits',
    'Contact' => 'contact',
];


foreach ($menu as $key => $valeur) {
    echo "<a href='$valeur'>$key</a><br>";
}


echo '<h2> exercice 8 </h2>';

/** Exercice 8 : Boucles imbriquées et conditions
 * 
 *  Objectif : Créer un tableau HTML de 10x10 dans lequel chaque cellule contient un nombre aléatoire entre 1 et 100. 
 * 
 *  Mettre un background vert sur les cellules contenant un nombre pair
 * 
 */
echo '<br>';
echo '<br>';

echo '<table><tbody>';

for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        $aleatoire = rand(1, 100);

        if ($aleatoire % 2 == 0) {
            echo "<td style ='background-color : green'>" . $aleatoire . "</td>";
        } else {
            echo "<td>$aleatoire</td>";
        }
    }
    echo '</td>';
}
echo '<t/body></table>';




echo '<br>';
echo '<hr>';



echo '<h2> exercice 9 </h2>';

/** Exercice 9 : Generation d'un calendrier
 * 
 *  Objectif : Utiliser une boucle for pour générer un calendrier mensuel (de 1 à 31), puis y afficher les jours dans un tableau HTML, les week ends devront être en rouge
 * 
 */



$mois = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'];

echo '<table border="1" cellspacing="0" cellpadding="5">';

// premiere boucle
for ($i = 0; $i < 12; $i++) {
    // On affiche le mois à chaque nouvelle boucle principale
    echo '<tr><th>' . $mois[$i] . '</th>';

    // 2nd boucle
    for ($j = 1; $j <= 31; $j++) {
        $dayOfWeek = ($j - 1) % 7; // Calcul de modulo (retournera un nombre)
        if ($dayOfWeek == 5 || $dayOfWeek == 6) { // si le modulo retourne 5 ou 6 alors on met les chiffres en rouge
            echo "<td style='color:red'> $j </td>";
        } else {
            echo '<td>' . $j . '</td>';
        }
    }
    echo '</tr>';
}
echo '</table>';





echo '<h2> exercice 10 </h2>';

/** Exercice 10 : Tableau de tableaux
 * 
 *  Objectif : Créer un tableau contenant trois sous tableaux, chacun représentera une personne avec les clés 'prenom','nom','age'. 
 * 
 *  Afficher toutes les informations sous forme de liste HTML ordonnées ('<ol>'), où chaque personne a sa propre sous-liste (<ul>)
 * 
 *  Résultat attendu : 
 * 
 *  <ol> 
 *  <li> Personne 1 </li>
 *  <ul> 
 *  <li> prénom : prenom </li>
 *  <li> nom : nom </li>
 *  <li> age: age </li>
 *  </ul>
 *  <li> Personne 2 </li>
 * 
 */



$tab = [
    'personne1' => [
        'prenom' => 'Daenerys',
        'nom' => 'Targaryen',
        'age' => 23
    ],
    'personne2' => [
        'prenom' => 'Rhaenyra',
        'nom' => 'Targaryen',
        'age' => 33
    ],
    'personne3' => [
        'prenom' => 'Daemon',
        'nom' => 'Targaryen',
        'age' => 49
    ]
];

echo '<ol>';

foreach ($tab as $key => $value) {
    echo "<li> $key </li>
        <ul>
        <li> prenom : $value[prenom] </li>
        <li> nom : $value[nom] </li>
        <li> age : $value[age] ans </li>
        </ul>
        ";
}

echo '</ol>';

$persons = [
    'Personne 1' => [
        'prénom' => 'Enzo',
        'nom' => 'Mahleb',
        'age' => 21
    ],
    'Personne 2' => [
        'prénom' => 'Chayma',
        'nom' => 'Boukedroun',
        'age' => 24
    ],
    'Personne 3' => [
        'prénom' => 'Sirine',
        'nom' => 'Ben ghazala',
        'age' => 25
    ]
];

echo '<ol>';

foreach ($persons as $p => $id) {
    echo '<li><h4>' . $p . '</li>';
    echo '<ul>';
    foreach ($id as $info => $details) {
        echo '<li>' . $info . ' : ' . $details . '</li>';
    }
    echo '</ul>';
}

echo '</ol>';