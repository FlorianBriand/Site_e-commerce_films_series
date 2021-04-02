<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="css/fichier.css" />
   <script type="text/javascript" src="js/Projet.js"></script>
   <title>Netchill</title>
</head>

<body onload="commande()">
   <?php
   include "header.php";
   include "menu.php";
   ?>
   <section id="partieArticle">

      <button id="bStock" onclick="afficheStock()">Afficher le stock</button>
   </section>

   <?php
   include "footer.php";
   ?>

</body>

</html>