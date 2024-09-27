<?php

//La fonction date retourne la date d'aujourd'hui selon le forma indiqué
$date = date('d-m-y H : i : s '); // d-m-y H: i : s(jour-mois-année/ heures, minutes, secondes)
echo $date; // affichera l'heure récupérer dans $date

//le timestamp
// Le timestamp est le nombre de secondeecoulées depuis le premier janvier 1970 à 00:00:00

echo "<p>" . time() . "</p>"; // retourne l'heure actuelle en timestamp
$dateAleatoire = strtotime('12-03-1998');   //convertire une date en timestamp
echo $dateAleatoire  . '<br>';   // affichera 889657200
$dateAnterieure = strtotime('01-12-1964'); // on peut quand même recupérer les date avant 1970
echo $dateAnterieure  . '<br>';


//strtotime vérifie que la date est valide

$dateValide = strtotime('35-12-2003');

echo $dateValide;



// Méthode procédurale


$date = date('d-m-y');
$dateJournée = strtotime('27-09-2020');
$dateForma = date('Y-m-d', $dateJournée );// Reconverti les seconde de $dateJourneeen nouveau forma de date (2020-09-27)


// methode objet


$dateObjet = new DateTime();
echo '<p>' . $dateObjet->format('Y-m-d'), '</p>';




