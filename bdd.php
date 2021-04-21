<?php
// Connexion BDD
function connect()
{
    $serveur = "localhost";
    $login = "root";
    $mdp = "";
    $bdd = "netchill";
    return mysqli_connect($serveur, $login, $mdp, $bdd);
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
    return $resultat;
}
