<?php
function validerettester($mdp) {
    // Vérifier la longueur du mot de passe
    if (strlen($mdp) < 6 || strlen($mdp) > 10) {
        return "Erreur : Le mot de passe doit avoir entre 6 et 10 caractères.";
    }
    
    // Définir le "salt" 
    $salt = "Walid777";
    
    // Concaténer le "salt" avec le mot de passe
    $mdpSalt = $mdp . $salt;
    
    // Chiffrer le mot de passe
    $mdpChiffre = password_hash($mdpSalt, PASSWORD_DEFAULT);
    
    // Tester la complexité du mot de passe
    if (preg_match('/[A-Z]/', $mdp) && preg_match('/[a-z]/', $mdp) && preg_match('/[0-9]/', $mdp)) {
        return "Le mot de passe est fort. Salt: $salt, Mot de passe chiffré: $mdpChiffre";
    } elseif (preg_match('/[a-z]/', $mdp) && preg_match('/[0-9]/', $mdp)) {
        return "Le mot de passe est moyen. Salt: $salt, Mot de passe chiffré: $mdpChiffre";
    } else {
        return "Le mot de passe est faible. Salt: $salt, Mot de passe chiffré: $mdpChiffre";
    }
}

?>