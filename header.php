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
      <?php


      if (isset($_SESSION['id'])) {
      ?>
        <div class="lienBarre">
          <?php
          echo '<a href="deconnexion.php">';
          echo "Déconnexion";
          ?>
          </a>
        </div>
      <?php
      } else {
      ?>
        <div class="lienBarre">
          <?php
          echo '<a href="connexion.php">';
          echo "Se connecter";
          ?>
          </a>
        </div>
      <?php
      }
      ?>
  </nav>
</header>