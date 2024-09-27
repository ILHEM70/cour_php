<?php

/** Exercice 1 : Vérifier la validité d'un âge
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable age est valide (entre 0 et 120)
 *  
 *  Afficher un message indiquant si l'âge est valide ou non 
 * 
 * petit bonus : vérifier que l'âge est un nombre entier et non un décimal (faire des recherches)
 */
echo '<h2>Exercice 1</h2>';

$age = 119;

if ($age >= 0 && $age <= 120 && is_int($age)) {
    echo 'L\'age est valide';
} else {
    echo ' L\'age n\'est pas valide';
}
echo '<br>';


/** Exercice 2 : Calculer la réduction
 * 
 *  Objectif : Ecrire une condition qui applique une réduction de 10% si le montant est supérieur à 100 (créer une variable montant), et 5% si le montant est entre 50 et 100€, sinon, aucune réduction n'est appliquée
 * 
 * chercher comment calculer une réduction
 * 
 */
echo '<h2> Exercice 2 </h2>';
$montant = 90;

if ($montant > 100) {
    echo $montant * 0.9;
} else if ($montant <= 100 && $montant >= 50) {
    echo $montant * 0.95;
} else {
    echo ' Aucune réduction n\'est appliqué ';
}



/** Exercice 3 : Afficher le jour de la semaine
 * 
 *  Objectif : Ecrire une condition 'switch' pour afficher un message en fonction du jour de la semaine, le jour est donnée par une variable $jour en number (1 pour lundi, 2 pour mardi etc...)
 * 
 * exemple : $lundi = 1;
 * $mardi = 2;
 * 
 */

echo '<h2> Exercice 3 </h2>';

echo '<br>';
$jour = 4;

switch ($jour) {
    case '1':
        echo "Aujourd'hui, c'est Lundi.";
        break;
    case '2':
        echo "Aujourd'hui, c'est Mardi.";
        break;
    case '3':
        echo "Aujourd'hui, c'est Mercredi.";
        break;
    case ' 4':
        echo "Aujourd'hui, c'est Jeudi.";
        break;
    case '5':
        echo "Aujourd'hui, c'est Vendredi.";
        break;
    case ' 6':
        echo "Aujourd'hui, c'est Samedi.";
        break;
    case '7':
        echo "Aujourd'hui, c'est Dimanche.";
        break;
    default:
        echo "Le numéro de jour est invalide.";
        break;
}
echo '<br>';

/** Exercice 4 : Comparaison de chaines de caractères
 *  Objectif : Ecrire une condition qui compare si deux variables sont identiques, la condition doit vérifier le type ET la valeur 
 */
echo '<h2> Exercice 4 </h2>';

$var1 = 2;
$var2 = '2';
$var3 = 2;

if ($var1 === $var2) {
    echo 'les variables sont identiques';
} else {
    echo 'les variables sont différentes  <br>';
}

if( $var1 === $var3){
    echo 'les variables sont identiques';  
} else {
    echo 'les variables sont différentes';
}


/** Exercice 5 : Calcul de la moyenne
 *  
 *  Objectif : Ecrire un script qui vérifie si la moyenne trois notes est suffisante pour passer un examen, la moyenne doit être supérieure ou égale à 10 (afficher un message pour chacun des cas)
 * 
 */
echo '<br>';
echo '<h2> Exercice 5 </h2>';

$note1 = 11;
$note2 = 13;
$note3 = 15;

$note =  ($note1 + $note2 + $note3) / 3;
if ($note >= 10) {
    echo 'vous ête admis';
} else {
    echo 'vous ête recalé';
}

/** Exercice 6 : Tester une variable indéfinie
 * 
 *  Objectif : Ecrire une condition qui utilisera 'isset()' pour vérifier si une variable $var est définie, si elle est définie, afficher sa valeur, sinon afficher un message indiquant qu'elle n'est pas définie
 * 
 * Tentez avec null, '', 0 
 */
echo '<br>';
echo '<h2> Exercice 6 </h2>';

$var = true;
if (isset($var)) {
    echo 'var existe ' . $var . gettype($var). '<br>';
} else {
    echo 'var n\'existe pas';
}

echo '<br>';

/** Exercice 7 : Valider un formulaire
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable $nom est vide avec empty(), si c'est le cas, afficher un message qui demandera à l'utilisateur de remplir le champ
 * 
 * utiliser simplement une variable et vérifiez plusieurs cas possibles
 * 
 */
echo '<h2> Exercice 7 </h2>';

$nom = 0;
if (empty($nom)) {
    echo 'nom est vide';
} else {
    echo 'nom est rempli';
}

echo '<br>';

/** Exercice 8 : Vérification d'un numéro pair ou impair
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable a une valeur paire ou impaire (utiliser modulo)
 * 
 */
echo '<h2> Exercice 8 </h2>';


$num = 20;
if ($num % 2 == 1)
    echo "$num est impair";
else
    echo "$num est pair";

echo '<br>';



/** Exercice 9 : Catégoriser une personne selon son âge
 * 
 *  Objectif : Ecrire une/des condition(s) qui classe une personnee en 'enfant','adolescent','adulte' ou 'senior' selon son age
 */

echo '<h2> Exercice 9 </h2>';
$age = 45;


if ($age >= 0 && $age <= 3) {
    echo "bébé";
}else if($age >= 4 && $age <= 12){
    echo "enfant";
} else if ($age >= 13 && $age <= 17) {
    echo "adolescent";
} else if ($age >= 18 && $age <= 64) {
    echo "adulte";
} else if ($age >= 65) {
    echo "senior";
} else {
    echo "Âge non valide";
}


echo '<br>';

echo '<h2> Exercice 10 </h2>';
/** Exercice 10 : Vérifier la cohérence des réponses avec l'opérateur XOR
 * 
 *  Objectif : Ecrire des conditions et vérifier la cohérence de ces réponses
 * 
 *  Exemple : Nous avons une vérification a faire pour vérifier si l'utilisateur se connecte avec son empreinte digitale ou son mdp (il ne peut pas faire les deux en même temps)
 * 
 *  xor : L'une des deux conditions doit être vraie seulement, si les deux sont vraies, alors il retournera false
 *  contrairement à || (or) qui vérifiera si au moins l'une des deux conditions est vraie, même si les deux le sont
 * 
 */

$empreinteDegital = 0;
$mdp =1;



if ($empreinteDegital  ^ $mdp ) {
    echo " connection reussie <br>";
} else {
   echo "vous devez utilisez mpd ou ed <br>";
}















echo '<br>';

