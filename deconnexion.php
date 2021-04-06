<?php
session_start();
session_destroy();
session_start();
include "varSession.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/fichier.css" />
    <title>Netchill</title>
    <script type="text/javascript" src="js/Projet.js"></script>
</head>

<body>
    <?php
    include "header.php";
    include "menu.php";
    ?>
    <span>Déconnexion réussie</span>


</body>

</html>