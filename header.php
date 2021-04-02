<header>
  <nav>

    <div id="barreHaut">
      <div class="lienBarre">
        <a href="index.php">Accueil</a>
      </div>

      <?php
      for ($i = 0; $i < sizeof($_SESSION['categories']); $i++) {

      ?>
        <div class="lienBarre">
          <?php

          echo '<a href="films.php?cat=' . $_SESSION['categories'][$i] . '">';

          echo $_SESSION['categories'][$i];
          ?>
          </a>
        </div>
      <?php
      }
      ?>


      <div class="lienBarre">
        <input type="search" id="barsearch" placeholder="Recherche" />
      </div>
      <div class="lienBarre">
        <a href="#">S'identifier</a>
      </div>
  </nav>
</header>