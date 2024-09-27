<?php

echo '<pre>';
var_dump($_POST);
echo'</pre>';


if (!empty($_POST)&& $_SERVER['REQUEST_METHOD']== 'POST') {
   $prenom = htmlspecialchars($_POST['prenom']);
    $description = htmlspecialchars($_POST['description']);

  if (strlen($prenom)> 10 ) {
echo 'Erreur le prenom est trop long';
  }
  if (strlen ($description) >200) {
        echo 'Erreur la decription est trop longue';
  }
}