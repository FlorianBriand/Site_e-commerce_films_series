<?php
// Connexion BDD
function connect()
{
    $serveur = "localhost";
    $login = "root";
    $mdp = "";
    $bdd = "netchill";
    $id_connexion = mysqli_connect($serveur, $login, $mdp, $bdd);
    if (!($id_connexion)) {
        echo "La connexion a renvoyé une erreur de code " . mysqli_errno($id_connexion) . " avec le message : " . mysqli_error($id_connexion) . "<br>";
        exit;
    }

    return $id_connexion;
}

function executer($conn, $requete)
{
    return mysqli_query($conn, $requete);
}

function deconnect($conn)
{
    mysqli_close($conn);
}

function recup($requete)
{
    $resultat = mysqli_query(connect(), $requete);
    if (!($resultat)) {
        echo "Echec de la requête avec le code d’erreur " . mysqli_errno(connect()) . " et le message : " . mysqli_error(connect()) . "<br>";
        exit;
    }
    return $resultat;
}

// Libération de la ressource et déconnexion de la base de données
