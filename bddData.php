<?php

include "bdd.php";

////////////////////////////////////////////////////////////////
//Définition des catégories
////////////////////////////////////////////////////////////////
$_SESSION['categories'] = array();

$requete = "SELECT * FROM categorie";
$resultat = recup($requete);

while ($nom = mysqli_fetch_array($resultat)) {
    array_push($_SESSION['categories'], $nom['nom']);
};


////////////////////////////////////////////////////////////////
//Définiton des produits
////////////////////////////////////////////////////////////////

try {
    $connexion = new PDO("mysql:host=localhost; dbname=netchill", "root", "");
} catch (PDOException $e) {
    echo ("Erreur connexion" . $e->getMessage());
    exit();
}

var_dump($_SESSION['categories']);

if (!isset($_SESSION['produits'])) {
    for ($i = 0; $i < sizeof($_SESSION['categories']); $i++) {


        $stmt = $connexion->prepare(
            "SELECT * FROM " . $_SESSION['categories'][$i]
        );
        $stmt->execute();

        // Pour recevoir des tableaux associatifs :
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // parcours des lignes du résultat
        $tab = [];
        while ($ligne = $stmt->fetch()) {
            array_push($tab, $ligne);
        }
        $_SESSION['produits'][$_SESSION['categories'][$i]] = $tab;
    }
}

var_dump($_SESSION['produits']['Films'][0]);
deconnect(connect());
