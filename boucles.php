<?php

echo '<h2> La boucle WHILE </H2>';

// compteur pour la boucle
$i = 0 ; 
 // TANT QUE $i est strictement inferieur à 10
while($i < 10){
//On incrmente $i à chaque tour, sinon boucle infinie car $i sera toujours à0
    echo $i . '<br>';
    $i++;
}

echo '<h2> La boucle do... WHILE </H2>';
$j = 1 ; 
// à la différence de while le do..while executera au moin une fois la boucle, et ce même si la condition n'est pas remplie.


do {
    echo ' Je fais mon tour de boucle <br>';
    $j++;
} while ($j > 10);



echo ' <h2> for </h2>';
// La boucle qu'on utilise le plus, elle est exactement comme la boucle while, seule la syntaxe change
for($i = 0; $i < 20 ; $i++){ // On peut trés bien mettre un autre calcul à la place de $i++ ($i=+ comptera $i 2 par 2)
    echo "$i <br>";
}



echo '<h2> La boucle foreach </H2>';

$tab = [30, 'bonjour', true, 3.05];

//réservé aux tableaux et aux objets pour parcourir les éléménts à l'interieur.
foreach($tab as $t){
    echo "$t <br>";
}



echo '<h2> Les boucles imbriqués </H2>';


for($i = 1; $i <=10; $i++){
    echo ' premiere boucle <br>';
    // Seconde boucle elle va parcourir 9 itéractionsà chaque tour de la première boucle.
    for($j = 1; $j <=10;$j++){
        echo ' seconde boucle <br>';
    }
}

/* Résultat :
premiere boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
premiere boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
premiere boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
premiere boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
premiere boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
premiere boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
premiere boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
premiere boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
premiere boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
premiere boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle




*/ 
