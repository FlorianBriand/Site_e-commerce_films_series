<?php
//include_once("bddData.php");
?>
<!-- id="barreHaut"-->
<header class="w-full bg-gradient-to-r from-black via-black to-red-800 p-5 rounded-b-3xl flex justify-between ">

  <div class=" flex justify-between items-center float-left w-1/2">

    <div class="float-left  mx-8 ">
      <a class="text-red-700 font-bold text-3xl" href="index.php">NETCHILL</a>
    </div>

    <div class="hover:underline  float-left text-white text-2xl mx-4 ">
      <a href="index.php">Accueil</a>
    </div>

    <?php
    for ($i = 0; $i < sizeof($_SESSION['categories']); $i++) {
    ?>
      <div class="hover:underline float-left text-white text-2xl mx-4 ">


        <a href="films.php?cat=<?= $_SESSION['categories'][$i] ?>">

          <?= $_SESSION['categories'][$i];
          ?>
        </a>
      </div>
    <?php
    }
    ?>
  </div>
  <div class=" flex items-center justify-end mr-5">
    <?php
    if (isset($_SESSION['id'])) {
    ?>
      <div class=" hover:underline text-white text-2xl mx-4 ">
        <a href="panier.php">
          Panier
          <?php
          if (isset($_SESSION['nbArticle'])) {
            echo " : " . $_SESSION['nbArticle'] . " articles";
          }
          ?>
        </a>
      </div>
      <div class="hover:underline text-white text-2xl mx-4 ">
        <a href="deconnexion.php">
          Déconnexion
        </a>
      </div>
    <?php
    } else {
    ?>
      <div class="hover:underline text-white text-2xl mx-4 ">
        <a href="connexion.php">
          Se connecter

        </a>
      </div>
    <?php
    }
    ?>
  </div>
</header>