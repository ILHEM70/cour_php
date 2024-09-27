<?php

// Utiliser form.php pour le formulaire

/** Exercice 1 : Validation de formulaire
 * 
 *  Objectif : Vérifier si tous les champs du formulaire ont été remplis et afficher un message d'erreur pour chaque champ manquant
 * 
 *  1 . S'assurer que tous les champs sont remplis avant d'afficher les données
 * 
 */
echo '<pre>';
var_dump($_POST);
echo '</pre>';





if (!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_post'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $ville = htmlspecialchars($_POST['ville']);
    if(empty($prenom)|| empty($nom) || empty($adresse) || empty($ville)){
        echo'Erreur tout les champs doivent etre remplie <br>';
    }else{
        echo "Le prénom est : $prenom, le nom est : $nom, l'adresse est : $adresse et la ville est : $ville <br> ";
    }  
    if (!empty($_POST['ville'])) {
        
        $ville = strtoupper($_POST['ville']);

        echo "Ville: $ville <br>";
        echo "Merci pour votre soumission.<br>";
    } else {
        echo "Veuillez entrer une ville.<br>";
    }
    if (strlen($prenom) >15 ) {
        echo 'Erreur le prenom est trop long<br>';
    }
    if (strlen($nom) > 15) {
        echo 'Erreur le nom est trop long<br>';
    }
    if (strlen($adresse) > 130) {
        echo 'Erreur l\' adresse est trop longue<br>';
    }
    if (strlen($ville) > 15) {
        echo 'Erreur le nom de la ville est trop long<br>';
    }
   
  
}


/** Exercice 2 : traitement et affichage sécurisé
 * 
 *  Objectif : Afficher les données du formulaire de manière sécurisée pour les éviter les attaques XSS (échapper les données) (possibilité de C/C le traitement de l'exercice 1)
 * 
 * 
 * 
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : '';
    $email = isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '';
    $message = isset($_POST['adresse']) ?htmlspecialchars($_POST['adresse']) : '';
}


/** Exercice 3 : Afficher les données précédentes
 * 
 *  Objectif : Réafficher les données précédemment saisies dans le formulaire après la soumission
 * 
 *  1 . Pré-remplir les champs du formulaire avec les valeurs soumises précédemment 
 * 
 *  *  Cet exercice se fera donc dans la partie formulaire directement ! (Vous devrez supprimer la partie action du formulaire pour qu'il redirige la requête sur la même page)
 * 
 */

/** Exercice 4 : Limitation de longueur pour adresse 
 * 
 *  Objectif : Limiter la longueur de l'adresse saisie par l'utilisateur à 200 caractères et afficher un message d'avertissement si ce seuil est dépassé
 * 
 *  1 . Verifier la longueur du champ adresse
 * 
 *  2 . Afficher un message si la longueur dépasse 130 caractères
 * 
 * 
 * Ne pas oublier de réactiver la partie action pour qu'il redirige la requête sur cette page
 */

/** Exercice 5 : Conversion de données
 * 
 *  Objectif : Convertir la ville en majuscule avant de l'afficher et afficher un message de confirmation 
 * 
 *  1 . Convertir la ville reçue du formulaire en majuscule
 * 
 *  2 . Afficher la ville en majuscule ainsi qu'un message de confirmation 'merci pour votre soumission'
 * 
 */
