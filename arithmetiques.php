<?php

// calcules opérateurs arithmétiques:

$a = 10;
$b = 5;

echo $a + $b;
echo'<br>';
echo $a - $b;
echo '<br>';
echo $a / $b;
echo '<br>';
echo $a * $b;
echo '<br>';
echo $a % $b;
echo '<br>';


// opérateurs et affectations combonées :

$c = 10;
$d = 2;

echo '<br>';
echo ($c += $d) .'<br>'; // $c = $c+$d = 12
echo ($c -= $d) . '<br>'; // 10
echo ($c /= $d) . '<br>'; // 5
echo ($c *= $d) . '<br>'; // 10
echo ($c % $d) . '<br>';  // 0


// Incrémentation et décrémentation : 

$i = 0;
echo '<br>';
echo $i++; // affiche la valeur dz $i Puis l'affiche
echo'<br>';
echo $i;

echo '<br>';
echo ++$i; // Incrimenter la valeur de $i PUIS l'affiche ( égale à 1)

echo '<br>';
$k = $i++;

echo '$i vaut : ' . ": $k"; // i vaudra 2 car il a été incrémentédans k
echo '<br>';
echo $k--; //ici $k = 1
echo '<br>';
echo --$k; // ici $k = -1

