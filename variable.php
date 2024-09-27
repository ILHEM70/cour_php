<?php

//Les variables 

// Types 'basique' de variable
$number = 10;   //integer
$string = 'Ceci est une chaine de caractere';
$flot = 3.10;   //double (nombre décimal)
$tab = ['Sirine', 'Maxime',20,'Greg'];   // tableau
$tab = array('Sirine', 'Maxime',20, 'Greg');
$boolean = true;  //false
$nullos = null;


$ceciEstUneVariable = false;


echo 'chaine de caractere';
echo '<br>';
echo $number;
echo '<br>';
echo gettype($string);
echo '<br>';
echo $flot;
echo '<br>';
echo gettype($flot);
echo '<br>';
echo '<br>';
echo '<pre>';
var_dump($tab);
echo '</pre>';
echo '<hr>';
print_r($tab);

echo '<hr>';
echo '<hr>';

// Les constantes


define('PRENOM', 'Valerie');
//constant PRENOM =Valerie
const NOM = 'Dupont';
echo '<br>';
echo 'Cette personne s\'appelle ';
echo PRENOM ; 
echo '<br>';
// les constantas sont utilisées pour des valeur ou on est sûre qu'elles ne changent pas 

const PI = 3.1415;

// define( PRENOM , 'Valerie')




