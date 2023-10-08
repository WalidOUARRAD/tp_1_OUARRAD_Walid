<?php
require_once("function.php"); 

var_dump($_POST);

if ($_POST) {
    $mdp = $_POST['motdepasse'];

    if (empty($mdp)) {
        echo "</br>Le mot de passe est vide.";
    } else {
        $resultat = validerettester($mdp);
        echo "</br>$resultat";
    }
}
?>
