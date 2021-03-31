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
   ?>
   <?php
   include "menu.php";
   ?>
   <section>


      <section id="partieArticle">
         <article>
            <img class="imgArticle" src="img/Guerre.jpg" alt="" />
            <div class="descrip">
               Première guerre mondiale
               <br />
               Synopsis :
               <br />
               Genre :
               <div class="commande"></div>
            </div>
         </article>
         <article>
            <img class="imgArticle" src="img/Icare.jpg" alt="" />
            <div class="descrip">
               Icarus
               <br />
               Synopsis :
               <br />
               Genre :
               <div class="commande"></div>
            </div>
         </article>
         <article>
            <img class="imgArticle" src="img/Mayday.jpg" alt="" />
            <div class="descrip">
               Mayday
               <br />
               Synopsis :
               <br />
               Genre :
               <div class="commande"></div>
            </div>
         </article>
         <article>
            <img class="imgArticle" src="img/topgear.jpg" alt="" />
            <div class="descrip">
               TopGear
               <br />
               Synopsis :
               <br />
               Genre :
               <div class="commande"></div>
            </div>
         </article>
         <article>
            <img class="imgArticle" src="img/Animal.jpg" alt="" />
            <div class="descrip">
               Meilleur espoir animal
               <br />
               Synopsis :
               <br />
               Genre :
               <div class="commande"></div>
            </div>
         </article>
         <button id="bStock" onclick="afficheStock()">Afficher le stock</button>
      </section>
   </section>
   <?php
   include "footer.php";
   ?>

</body>

</html>