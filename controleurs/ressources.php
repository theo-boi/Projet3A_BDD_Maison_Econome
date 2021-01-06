<?php

//On inclut les appels aux données
include('./modele/requetes.afficher_ajouter_ressources.php');

// si la fonction n'est pas définie, on choisit d'afficher l'accueil
if (!isset($_GET['fonction']) || empty($_GET['fonction'])) {
    $function = "accueil";
    $alerte = "";
} else {
    $function = $_GET['fonction'];
    $alerte = "";
}

switch ($function) {

    case 'afficherRessources';
    
        $vue = "appareil";
        $title = "Mes Appareils";
        
        $entete = "Voici la liste de vos appareils :";
        
        $afficherRessources = afficherRessources($bdd);
        
        if(mysqli_num_rows($afficherRessources) <= 0) {
            $alerte = "Aucun appareil répertorié pour le moment";
        }
        
        break;
