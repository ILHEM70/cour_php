<?php

/** Exercice 1 : Opérateurs de base
 *  Objectif : calculer des variables avec les opérateurs de base
 * 
 * 1 . Déclarer deuxvariables $a et $b avec des valeurs de votre choix (int)
 * 
 * 2 . Utilisez les opérateurs arithmétiques pour calculer les variables avec les opérateurs suivants (addition +, soustraction -, multiplication * , division / et modulo %), puis afficher le résultat
 */
$a = 12;
$b = 8;
echo $a + $b;
echo '<br>';
echo $a - $b;
echo '<br>';
echo $a / $b;
echo '<br>';
echo $a * $b;
echo '<br>';
echo $a % $b;
echo '<br>';



/** Exercice 2 : Opération combinées
 *  Objectif : calculer ces même variables en utilisant la syntaxe des opérateur d'affectation combinés (+=)
 */


echo '<br>';
echo ($a += $b) . '<br>';
echo ($a -= $b) . '<br>';
echo ($a /= $b) . '<br>';
echo ($a *= $b) . '<br>';
echo ($a % $b) . '<br>';



/** Exercice 3 : Incrémentation et décrémentation (préfixe = ++$variable)
 * Objectif : Calculer une variable avec l'incrémentation et la décrémentation en préfixe
 *
 * 1 . Déclarer une variable $counter initialisée à 10;
 * 
 * 2 . incrémenter cette valeur de 1;
 * 
 * 3 . Réinitialiser $counter à 10 et décrémenter de 1
 * 
 * Afficher tous les résultats
 */

echo '<br>';

$counter = 10;
echo ++$counter;

echo '<br>';
$counter = 10;

echo '<br>';
echo --$counter;


/** Exercice 4 : Incrémentation et décrémentation (postfixe = $variable++)
 * Objectif : Calculer une variable avec l'incrémentation et la décrémentation en postfixe
 * 
 * 1 . Déclarer une variable $num initialisée à 10;
 * 
 * 2 . incrémenter cette valeur de 1;
 * 
 * 3 . réinitialiser $num à 10 et décrémenter de 1
 * 
 * Afficher tous les résultats
 */

echo '<br>';

$num = 10;
echo $num++ . '<br>';
echo $num;

echo '<br>';
$num = 10;
echo '<br>';
echo $num-- . '<br>';
echo $num;

echo '<br>';

/** Exercice 5 : Calcul des Ages
 *  Objectif : Simuler un anniversaire
 * 
 * 1 . Déclarer une variable $age initialisée à votre age;
 * 
 * 2 . Simuler le passage d'une année en incrémentant votre âge de 1; (postfixe)
 * 
 * 3 . Remontez le temps et réduisez votre âge pour revenir à son état d'origine (postfixe)
 */

$age = 54;
echo $age++ .'<br>';

echo $age--;

echo '<br>';



/** Exercice 6 : Calcul d'une moyenne
 *  Objectif : Calculer la moyenne de trois variables différentes
 * 
 * 1 . Déclarer 3 variables $note1,$note2,$note3 avec des valeurs entre 1 et 20 ;
 * 
 *  2 . Calculer la moyenne des trois notes en utilisant les opérateurs arithmétiques (afficher le résultat);
 * 
 * 3 . utiliser l'opérateur d'affectation combiné pour ajouter une nouvelle note à la moyenne et afficher le résultat
 */
$note1 = 12;
$note2 = 15;
$note3 = 17;

$note =  ($note1 + $note2 + $note3) / 3;
echo '<br>';
echo $note;

 echo $note += 16;




/** Exercice 7 : Modulo
 *  Objectif : Calculer avec l'opérateur modulo
 * 
 * 1 . Déclarer une variable $total initialisée à 37;
 * 
 * 2 . Utiliser l'opérateur modulo pour vérifier si $total est pair ou impair
 * 
 * 3 . Afficher un message qui dit si $total est pair ou impair
 * 
 */

echo '<br>';

$total = 37;

if ($total % 2 == 1)
    echo "$total est impair";
else
    echo "$total est pair";

echo '<br>';





/** Exercice 8 : Panier d'achats 
 *  Objectif : Gérer les quantités d'un panier d'articles
 * 
 *  1 . Déclarer une variabler $quantity initialisée à 5;
 * 
 *  2 . L'utilisateur ajoute 3 articles à son panier, la quantité augmentera donc de 3;
 * 
 *  3 . L'utilisateur change d'avis sur 2 des articles et décide de les retirer
 * 
 * Afficher le résultat
 */


$quantity = 5;
echo $quantity += 3;
echo '<br>';
echo $quantity -= 2;

/** Exercice 9 : Conversion d'unités
 *  Objectif : Convertir des KM en Miles
 * 
 *  1 . Déclarer une variable $kilometres initialisée à 100;
 * 
 *  2 . Convertir les KM en miles (1km = environ 0.621371), le calcul sera donc $kilometres * 0.621371
 * 
 */

echo '<br>';
$kilometres = 100;


echo '<br>';

 $kilometres *= 0.621371 ;
 echo $kilometres;


 
