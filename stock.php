<?php
include_once("head.php");
include_once("bdd.php");
$connexion = connect();

for ($i = 0; $i < sizeof($_SESSION['categories']); $i++) {

    $cat = $_SESSION['categories'][$i];

    for ($j = 0; $j < sizeof($_SESSION['produits'][$_SESSION['categories'][$i]]); $j++) {
        $panier = $_SESSION['produits'][$_SESSION['categories'][$i]][$j]['panier'];
        if ($panier > 0) {
            $id = $j + 1;
            $requete = "UPDATE $cat SET stock= stock - $panier WHERE id=$id;";
            $resultat = recup($requete);


            $_SESSION['produits'][$_SESSION['categories'][$i]][$j]['panier'] = 0;
        }
    }
}

$_SESSION['nbArticle'] = 0;

?>
<span class="text-green-700">Vos achats ont bien été enregistrées. Les stocks ont été mis à jour.</span>

<a class='mt-2 px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700' href=index.php>Retour à l'accueil</a>";