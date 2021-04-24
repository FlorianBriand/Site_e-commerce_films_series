<?php
include "head.php";
if (!isset($_GET['cat'])) {
   header('Location: index.php');
}
$tab = $_SESSION['produits'][$_GET['cat']];


?>

<body style="background-color: #141414;">
   <?php

   @$valider = $_POST["valider"];
   if (isset($valider)) {
      $compteur = 0;
      for ($i = 0; $i < sizeof($tab); $i++) {
         if (isset($_POST["quantite" . $i])) {
            $_SESSION['produits'][$_GET['cat']][$i]['panier'] = $_SESSION['produits'][$_GET['cat']][$i]['panier'] + $_POST["quantite" . $i];
            $_SESSION['produits'][$_GET['cat']][$i]['stock'] = $_SESSION['produits'][$_GET['cat']][$i]['stock'] - $_POST["quantite" . $i];
            $compteur = $compteur + $_POST["quantite" . $i];
         }
      }
      if (isset($_SESSION['nbArticle'])) {
         $_SESSION['nbArticle'] = $_SESSION['nbArticle'] + $compteur;
      } else {
         $_SESSION['nbArticle'] = $compteur;
      }


   ?>


   <?php }

   include "header.php";
   include "menu.php";

   if (isset($valider)) {
   ?>
      <span class="panier">
         Vos <?= $compteur ?> articles ont bien été ajoutés.
         </br> </br><a class="mt-2 px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700" href="panier.php">Voir le panier
         </a>
      </span>
   <?php } ?>

   <form action="" method="POST">
      <section class="flex flex-wrap justify-center content-center mt-5">


         <?php
         for ($i = 0; $i < sizeof($_SESSION['produits'][$_GET['cat']]); $i++) {
         ?>
            <article class=" bg-gradient-to-t from-black via-red-700 to-red-800 m-4 p-5 grid grid-cols-2 h-96 text-white rounded-3xl justify-center content-center">

               <img class="imgArticle w-44 place-self-center rounded-lg " src="img/<?= $_SESSION['produits'][$_GET['cat']][$i]['picture']; ?>" alt="" />
               <div class="text-center">
                  <p class="titre text-black text-2xl font-bold mb-5 "><?= $_SESSION['produits'][$_GET['cat']][$i]['nom']; ?></p>
                  <p class="intro"> Genre : <a class="genre"><?= $_SESSION['produits'][$_GET['cat']][$i]['genre']; ?></a></p>
                  <div class="grid grid-cols-3 justify-items-center my-5 mx-10">
                     <input type="button" value="-" id="b-<?= $i ?>" disabled class="bSuite w-8 cursor-pointer text-black" onclick="moins(<?= $i ?>)" />
                     <input name="quantite<?= $i ?>" onclick="setMax(<?= $i ?>,<?= $_SESSION['produits'][$_GET['cat']][$i]['stock'] ?>);resetQuantite( <?= $i ?>,<?= $_SESSION['produits'][$_GET['cat']][$i]['stock'] ?>)" onfocusout="resetQuantite(<?= $i ?>,<?= $_SESSION['produits'][$_GET['cat']][$i]['stock'] ?>)" class="nbStock text-black w-10 text-center rounded-xl" id="stock<?= $i ?>" min="0" type="number" value="0" />
                     <input type="button" value="+" id="b+<?= $i ?>" class="bSuite text-black w-8 cursor-pointer" onclick="plus(<?= $i ?>,<?= $_SESSION['produits'][$_GET['cat']][$i]['stock'] ?>)" />
                  </div>
                  <input class="mt-2 px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 " type="submit" name="valider" value="Ajouter au panier" <?php if (!isset($_SESSION['id'])) {
                                                                                                                                                                                                               echo "disabled";
                                                                                                                                                                                                            } ?> />

                  <div style="display: none" class="stock">
                     <br>
                     <span id="countStock<?= $i ?>">
                        <?= $_SESSION['produits'][$_GET['cat']][$i]['stock'] ?>
                     </span> articles restants
                  </div>
               </div>

            </article>
         <?php
         }
         ?>
         <input type="button" id="bStock" class="fixed bottom-1/4 right-10 mt-2 px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700" onclick="afficheStock()" value="Afficher le stock" />
      </section>
   </form>
   <?php
   include "footer.php";
   ?>
</body>

</html>