<?php
session_start();
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
   // indiqué le chemin de votre fichier JSON, il peut s'agir d'une URL
   $json = file_get_contents("donnees.json");

   var_dump(json_decode($json));

   $tab = $_SESSION['produits'][$_GET['cat']];

   include "header.php";
   include "menu.php";
   ?>

   <section>
      <section id="partieArticle">

         <?php
         for ($i = 0; $i < sizeof($tab); $i++) {
         ?>
            <article>
               <img class="imgArticle" src=<?php echo $tab[$i]['img']; ?> alt="" />
               <div class="descrip">
                  <p class="titre"><?php echo $tab[$i]['nom']; ?></p>
                  <p class="intro">
                     Synopsis :
                     <input id="verif<?php echo $i ?>f" class="input" type="checkbox" onclick="cache('verif<?php echo $i ?>f', 'rf<?php echo $i ?>')" />
                  </p>
                  <p class="synopsis" id="rf<?php echo $i ?>">
                     <?php echo $tab[$i]['synopsis']; ?>
                  </p>
                  <p class="intro">
                     Genre : <a class="genre"><?php echo $tab[$i]['genre']; ?></a>
                  </p>

                  <button>Acheter</button><br /><br />

                  <button id="b-<?php echo $i ?>" disabled class="bSuite" onclick="moins(<?php echo $i ?>)">
                     -
                  </button>
                  <input onclick="setMax(<?php echo $i ?>,<?php echo $tab[$i]['stock'] ?>);resetQuantite( <?php echo $i ?>,<?php echo $tab[$i]['stock'] ?>)" onfocusout="resetQuantite(<?php echo $i ?>,<?php echo $tab[$i]['stock'] ?>)" class="nbStock" id="stock<?php echo $i ?>" min="0" type="number" value="0" />

                  <button id="b+<?php echo $i ?>" class="bSuite" onclick="plus(<?php echo $i ?>,<?php echo $tab[$i]['stock'] ?>)">
                     +
                  </button><br />
                  <div style="display: none" class="stock">Stock :
                     <span id="countStock<?php echo $i ?>">
                        <?php echo $tab[$i]['stock'] ?>
                     </span>
                  </div>
               </div>

            </article>


         <?php
         }
         ?>
         <button id="bStock" onclick="afficheStock()">Afficher le stock</button>
      </section>
   </section>
   <?php
   include "footer.php";
   ?>
</body>

</html>