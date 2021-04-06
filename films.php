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

   $tab = $_SESSION['produits']->{$_GET['cat']};

   include "header.php";
   include "menu.php";

   @$valider = $_POST["valider"];
   if (isset($valider)) {
      $compteur = 0;
      for ($i = 0; $i < sizeof($tab); $i++) {
         if (isset($_POST["quantite" . $i])) {

            $tab[$i]->{'panier'} = $tab[$i]->{'panier'} + $_POST["quantite" . $i];
            $tab[$i]->{'stock'} = $tab[$i]->{'stock'} - $_POST["quantite" . $i];
            $compteur = $compteur + $_POST["quantite" . $i];
         }
      }
   ?>
      <span class="panier" style="margin-left:35%;">
         Vos <?php echo $compteur ?> articles ont bien été ajoutés.
         </br> </br><a style="margin-left:40%;" href="panier.php">Voir le panier
         </a>
      </span>
   <?php }
   ?>
   <form action="" method="POST">
      <section id="partieArticle">


         <?php
         for ($i = 0; $i < sizeof($tab); $i++) {
         ?>
            <article>
               <img class="imgArticle" src=<?php echo $tab[$i]->{'img'}; ?> alt="" />
               <div class="descrip">
                  <p class="titre"><?php echo $tab[$i]->{'nom'}; ?></p>
                  <p class="intro">
                     Synopsis :
                     <input id="verif<?php echo $i ?>f" class="input" type="checkbox" onclick="cache('verif<?php echo $i ?>f', 'rf<?php echo $i ?>')" />
                  </p>
                  <p class="synopsis" id="rf<?php echo $i ?>">
                     <?php echo $tab[$i]->{'synopsis'}; ?>
                  </p>
                  <p class="intro">
                     Genre : <a class="genre"><?php echo $tab[$i]->{'genre'}; ?></a>
                  </p>
                  <input type="button" value="-" id="b-<?php echo $i ?>" disabled class="bSuite" onclick="moins(<?php echo $i ?>)" />
                  <input name="quantite<?php echo $i ?>" onclick="setMax(<?php echo $i ?>,<?php echo $tab[$i]->{'stock'} ?>);resetQuantite( <?php echo $i ?>,<?php echo $tab[$i]->{'stock'} ?>)" onfocusout="resetQuantite(<?php echo $i ?>,<?php echo $tab[$i]->{'stock'} ?>)" class="nbStock" id="stock<?php echo $i ?>" min="0" type="number" value="0" />
                  <input type="button" value="+" id="b+<?php echo $i ?>" class="bSuite" onclick="plus(<?php echo $i ?>,<?php echo $tab[$i]->{'stock'} ?>)" /><br />
                  <br>
                  <input type="submit" name="valider" value="Ajouter au panier" <?php if (!isset($_SESSION['id'])) {
                                                                                    echo "disabled";
                                                                                 } ?> />

                  <br><br>
                  <div style="display: none" class="stock">Stock :
                     <span id="countStock<?php echo $i ?>">
                        <?php echo $tab[$i]->{'stock'} ?>
                     </span>
                  </div>
               </div>

            </article>
         <?php
         }
         ?>
         <input type="button" id="bStock" onclick="afficheStock()" value="Afficher le stock" />
      </section>
   </form>
   <?php
   include "footer.php";
   ?>
</body>

</html>