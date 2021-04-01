<?php
session_start();
var_dump($_SESSION['categories']);
?>

<header>
  <nav>

    <div id="barreHaut">
      <div class="lienBarre">
        <a href="index.php">Accueil</a>
      </div>

      <?php
      var_dump($_SESSION['categories']['Film']);
      ?>
      <div class="lienBarre">
        <a href="films.php">Films</a>
      </div>
      <div class="lienBarre">
        <a href="series.php">Séries</a>
      </div>
      <div class="lienBarre">
        <a href="documentaire.php">Documentaires</a>
      </div>

      <div class="lienBarre">
        <input type="search" id="barsearch" placeholder="Recherche" />
      </div>
      <div class="lienBarre">
        <a href="#">S'identifier</a>
      </div>
  </nav>
</header>