<?php

/*

Exercice 1 : Salutation Basique
Crée une fonction saluer($nom) qui prend un nom en paramètre et affiche "Bonjour, $nom !".

*/
echo '<h2> Exercice 1 </h2>';
function hello($nom)
{
echo "<p>Bonjour  $nom !</p>";
}

hello('Ilhem');


echo '<h2> Exercice 2 </h2>';
/*
Exercice 2 : Addition Simple
Crée une fonction addition($a, $b) qui retourne la somme de deux nombres.

*/

function addition($a, $b)
{
    return $a + $b;
}

$somme = addition(10, 8);

echo ' <p> La somme de $a + $b = '. $somme;



echo '<h2> Exercice 3 </h2>';

/*
Exercice 3 : Vérifier Si un Nombre est Pair
Crée une fonction estPair($nombre) qui retourne true si le nombre est pair, sinon false.
*/


function estPair($nombre)
{
    
    if ($nombre % 2 == 0) {
        return true; 
         
    } else {
        return false; 
    }
}
$nombre = 25;
if (estPair($nombre)) {
    echo "$nombre est pair.";
} else {
    echo "$nombre est impair.";
}





echo '<h2> Exercice 4 </h2>';

/*
Exercice 4 : Boucle de Nombres
Utilise une boucle for pour afficher les nombres de 1 à 10.
*/


for ($i = 1; $i <= 10; $i++) { 
    echo "$i <br>";
}



echo '<h2> Exercice 5</h2>';
/*
Exercice 5 : Affichage de Tableaux
Crée un tableau avec 5 prénoms, puis utilise une boucle foreach pour les afficher.
*/

$tab = ['Ilhem', 'Greg', 'Enzo', 'Jawad', 'Gustave'];


foreach ($tab as $t) {
    echo "$t <br>";
}



echo '<h2> Exercice 6</h2>';
/*
Exercice 6 : Somme des Nombres d’un Tableau
Crée un tableau de 5 nombres, puis utilise une boucle pour calculer et afficher la somme des valeurs du tableau.
*/

$tableau = [3, 7, 12, 5, 8];


$somme = 0;


foreach ($tableau as $nombre) {
    $somme += $nombre;
}


echo "La somme des valeurs du tableau est : $somme";


echo '<h2> Exercice 7</h2>';
/*
Exercice 7 : Trouver le Plus Grand Nombre
Crée un tableau de nombres et trouve la valeur maximale en utilisant une boucle.
*/

$tableau = [20, 37, 58, 105, 68, 209];
echo max($tableau);

echo '<h2> Exercice 8</h2>';


/*
Exercice 8 : Vérifier le Type d'une Variable
Crée une fonction qui prend une variable en paramètre et affiche son type (entier, flottant, chaîne de caractères, etc.).
*/
 $x = '2085';
function maVariable($x){
   
echo '<pre>';
var_dump($x);
echo '</pre>';
}
echo maVariable($x);

echo '<h2> Exercice 9</h2>';


// Exercice 10 : Générer un Mot de Passe
// Crée une fonction qui génère un mot de passe aléatoire de 8 caractères.
// chercher random_bytes;
$bytes = random_bytes(4);
function motDePasse($bytes){

var_dump(bin2hex($bytes));
}

echo motDePasse($bytes);


echo '<h2> Exercice 10</h2>';

/*
Exercice 11 : Calcul de Factorielle
Crée une fonction factorielle($n) qui calcule et retourne la factorielle d’un nombre en utilisant une boucle.
*/


function factorielle($n)
{
   
    $resultat = 1;


    for ($i = 1; $i <= $n; $i++) {
        $resultat *= $i; 
    }

    return $resultat;
}

echo factorielle(7);



echo '<h2> Exercice 11</h2>';

/*
Exercice 12 : Vérification d’Email
Crée une fonction qui prend un email en paramètre et vérifie s’il est valide (utilise filter_var()).
*/


function verifierEmail($email)
{
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;  
    } else {
        return false;  
    }
}


$email = "exemple@domaine.com";
if (verifierEmail($email)) {
    echo "L'email est valide.";
} else {
    echo "L'email n'est pas valide.";
}




echo '<h2> Exercice 12</h2>';
/*
Exercice 13 : Afficher les Multiples de 3
Utilise une boucle pour afficher tous les multiples de 3 entre 1 et 30.
*/



$j = 0;
do {
    echo $j += 3, '<br>';
} while ($j < 30);


echo '<h2> Exercice 13</h2>';

// Exercice 14 : Tri d’un Tableau
// Crée un tableau de nombres et trie-le dans l’ordre croissant en utilisant sort().

$tab = [14, 20, 30, 75, 13, 200, 45, 56, 89, 17, 23, 84];

sort($tab);
foreach ($tab as $key => $val) {
    echo "[" . $key . "] = " . $val . "\n <br>";
}



echo '<h2> Exercice 14</h2>';
/*
Exercice 15 : Fusionner Deux Tableaux
Crée deux tableaux de nombres, fusionne-les en un seul, et affiche le tableau fusionné.
*/

$array1 = [12, 27, 15, 2, 4];
$array2 = array("a", "b", "c", "d" , "h", "k");
$result = array_merge($array1, $array2);
print_r($result);


echo '<h2> Exercice 15</h2>';
/*
Exercice 17 : Conversion de Types
Crée une fonction qui prend un nombre flottant, le convertit en chaîne de caractères, puis affiche le type avant et après conversion.
*/

function convertirFlottantEnChaine($nombre)
{
   
    echo "Type avant conversion : " . gettype($nombre) . "\n";
    echo '<br>';

  
    $chaine = (string) $nombre;

   
    echo "Type après conversion : " . gettype($chaine) . "\n";

    return $chaine;
}


convertirFlottantEnChaine(12.34);



echo '<h2> Exercice 16</h2>';
/*Exercice 18 : Boucle de Division
Utilise une boucle while pour diviser un nombre par 2 jusqu'à ce qu'il soit inférieur à 1.
*/


$nombre = 64;


while ($nombre >= 1) {
    echo "Nombre actuel : $nombre\n";
    $nombre /= 2;
}

echo "Le nombre final est : $nombre\n";


echo '<h2> Exercice 17</h2>';
/*
Exercice 19 : Vérifier les Nombres Pairs dans un Tableau
Crée une fonction qui prend un tableau de nombres, vérifie lesquels sont pairs, et les affiche.
*/

$nombre = [35, 22, 40, 77, 89, 38, 2099, 62];


function afficherNombresPairs($nombres)
{
    foreach ($nombres as $nombre) {
        if ($nombre % 2 == 0) {
            echo "$nombre est pair\n <br>";
        } else {
            echo "$nombre est impair\n <br>";
        }
    }
}
afficherNombresPairs($nombre);




echo '<h2> Exercice 18</h2>';
/*
Exercice 21 : Somme des Carrés
Crée une fonction qui prend un tableau de nombres, calcule le carré de chaque nombre, puis retourne la somme de ces carrés.
*/

function carre($nb)
{
    return $nb * $nb;
}
 

echo carre(39);





echo '<h2> Exercice 19</h2>';
/*
Exercice 22 : Inverser un Tableau
Crée une fonction qui prend un tableau et retourne un nouveau tableau avec les éléments dans l'ordre inverse.
*/

function inverserTableau($tableau)
{
    $nouveauTableau = [];  

    foreach ($tableau as $cle => $valeur) {
        $nouveauTableau[$valeur] = $cle;
    }

    return $nouveauTableau;
}

$tableau = ["ilhem" => 'prenom', "Nouira" => 'nom', "54" => 'age'];
print_r (inverserTableau($tableau));



echo '<h2> Exercice 20</h2>';
// Exercice 23 : Comparaison de Nombres
// Crée une fonction qui prend deux nombres et retourne le plus grand des deux.

function plusGrand($nombre1, $nombre2)
{
    if ($nombre1 > $nombre2) {
        return $nombre1;
    } else {
        return $nombre2;
    }
}


$nombre1 = 25;
$nombre2 = 42;

$plusGrandNombre = plusGrand($nombre1, $nombre2);
echo "Le plus grand nombre est : $plusGrandNombre";




echo '<h2> Exercice 21</h2>';
/*
Exercice 24 : Recherche dans un Tableau
Crée une fonction qui prend un tableau et un élément, et vérifie si cet élément est présent dans le tableau.
*/

function tableau($tab, $nb)

