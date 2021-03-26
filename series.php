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
    <section>
      <section id="partieArticle">
        <article>
          <img class="imgArticle" src="img/Prison.jpg" alt="" />
          <div class="descrip">
            <p class="titre">Prison Break</p>
            <p class="intro">
              Synopsis :
              <input
                id="verif1s"
                class="input"
                type="checkbox"
                onclick="cache('verif1s', 'rs1')"
              />
            </p>
            <p class="synopsis" id="rs1">
              Michael Scofield s'engage dans une véritable lutte contre la
              montre : son frère Lincoln est dans le couloir de la mort, en
              attente de son exécution. Persuadé de son innocence mais à court
              de solutions, Michael décide de se faire incarcérer à son tour
              dans le pénitencier d'état de Fox River pour organiser leur
              évasion...
            </p>
            <p class="intro">Genre : <a class="genre">Drame, Thriller</a></p>
            <div class="commande"></div>
          </div>
        </article>

        <article>
          <img class="imgArticle" src="img/peaky.jpg" alt="" />
          <div class="descrip">
            <p class="titre">Peaky Blinders</p>
            <p class="intro">
              Synopsis :
              <input
                id="verif2s"
                class="input"
                type="checkbox"
                onclick="cache('verif2s', 'rs2')"
              />
            </p>
            <p class="synopsis" id="rs2">
              En 1919, à Birmingham, soldats, révolutionnaires politiques et
              criminels combattent pour se faire une place dans le paysage
              industriel de l'après-Guerre. Le Parlement s'attend à une violente
              révolte, et Winston Churchill mobilise des forces spéciales pour
              contenir les menaces. La famille Shelby compte parmi les membres
              les plus redoutables.
            </p>
            <p class="intro">
              Genre : <a class="genre">Drame, Historique, Policier</a>
            </p>
            <div class="commande"></div>
          </div>
        </article>

        <article>
          <img class="imgArticle" src="img/casa.jpg" alt="" />
          <div class="descrip">
            <p class="titre">La Casa De Papel</p>
            <p class="intro">
              Synopsis :
              <input
                id="verif3s"
                class="input"
                type="checkbox"
                onclick="cache('verif3s', 'rs3')"
              />
            </p>
            <p class="synopsis" id="rs3">
              Huit voleurs font une prise d'otages dans la Maison royale de la
              Monnaie d'Espagne, tandis qu'un génie du crime manipule la police
              pour mettre son plan à exécution.
            </p>
            <p class="intro">Genre : <a class="genre">Drame, Thriller</a></p>
            <div class="commande"></div>
          </div>
        </article>
        <article>
          <img class="imgArticle" src="img/Lupin.jpg" alt="" />
          <div class="descrip">
            <p class="titre">Lupin</p>
            <p class="intro">
              Synopsis :
              <input
                id="verif4s"
                class="input"
                type="checkbox"
                onclick="cache('verif4s', 'rs4')"
              />
            </p>
            <p class="synopsis" id="rs4">
              Il y a 25 ans, la vie du jeune Assane Diop est bouleversée lorsque
              son père meurt après avoir été accusé d'un crime qu'il n'a pas
              commis. Aujourd’hui, Assane va s'inspirer de son héros, Arsène
              Lupin - Gentleman Cambrioleur, pour le venger…
            </p>
            <p class="intro">Genre : <a class="genre">Drame, Policier</a></p>
            <br />
            <div class="commande"></div>
          </div>
        </article>
        <article>
          <img class="imgArticle" src="img/Scorpion.jpg" alt="" />
          <div class="descrip">
            <p class="titre">Scorpion</p>
            <p class="intro">
              Synopsis :
              <input
                id="verif5s"
                class="input"
                type="checkbox"
                onclick="cache('verif5s', 'rs5')"
              />
            </p>
            <p class="synopsis" id="rs5">
              Walter O'Brien, surnommé "Scorpion", un homme possédant le 4ème
              Q.I. le plus élevé du monde, a recruté quelques-uns des plus
              grands génies de la planète pour fonder une société chargée de
              résoudre des crises urgentes et d'ampleur considérable, de celles
              que même la CIA ne parvient pas à régler seule. Inadaptés
              socialement, ils apprennent ensemble à vivre en communauté, à
              dépasser leurs peurs, leurs phobies et à vaincre leur solitude...
            </p>
            <p class="intro">Genre : <a class="genre">Drame</a></p>
            <div class="commande"></div>
          </div>
        </article>
        <button id="bStock" onclick="afficheStock()">Afficher le stock</button>
      </section>
    </section>
  </body>
</html>
