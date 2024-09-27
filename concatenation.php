<?php

$bonjour = 'Bonjour tout le monde,';
$commentCaVa = ' Comment ça va ?';
echo $bonjour. $commentCaVa;
echo '<br>';
echo '$bonjour'. '$commentCaVa'; // Ne prendra pas en compte les variables, il affichera le contenue de ces variables.
echo '<br>';
$phrase = 'l\'affichage des appostrophes'; // prendra en compte les variables, il affichera le contenue

$prenom = 'Marie';
echo "$prenom <br>";
echo "$prenom", '<br>';
echo $prenom;
echo '<br>';
$prenom = 'Vincent';
echo $prenom;


