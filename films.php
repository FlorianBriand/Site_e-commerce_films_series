<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="css/fichier.css" />
   <title>Netchill</title>
   <script type="text/javascript" src="js/Projet.js"></script>
</head>

<body onload="commande()">
   <?php
   include "header.php";
   include "menu.php";
   ?>
   <section>
      <section id="partieArticle">
         <article>
            <img class="imgArticle" src="img/venom.jpg" alt="" />
            <div class="descrip">
               <p class="titre">Venom</p>
               <p class="intro">
                  Synopsis :
                  <input id="verif1f" class="input" type="checkbox" onclick="cache('verif1f', 'rf1')" />
               </p>
               <p class="synopsis" id="rf1">
                  Possédé par un symbiote qui agit de manière autonome, le
                  journaliste Eddie Brock devient le protecteur létal Venom.
               </p>
               <p class="intro">
                  Genre : <a class="genre">Science Fiction, Action</a>
               </p>
               <div class="commande"></div>
            </div>
         </article>
         <article>
            <img class="imgArticle" src="img/farfromhome.jpg" alt="" />
            <div class="descrip">
               <p class="titre">Spider-man : Far From Home</p>
               <p class="intro">
                  Synopsis :
                  <input id="verif2f" class="input" type="checkbox" onclick="cache('verif2f', 'rf2')" />
               </p>
               <p class="synopsis" id="rf2">
                  L'araignée sympa du quartier décide de rejoindre ses meilleurs
                  amis Ned, MJ, et le reste de la bande pour des vacances en Europe.
                  Cependant, le projet de Peter de laisser son costume de
                  super-héros derrière lui pendant quelques semaines est rapidement
                  compromis quand il accepte à contrecoeur d'aider Nick Fury à
                  découvrir le mystère de plusieurs attaques de créatures, qui
                  ravagent le continent !
               </p>
               <p class="intro">Genre : <a class="genre">Action, Aventure</a></p>
               <div class="commande"></div>
            </div>
         </article>
         <article>
            <img class="imgArticle" src="img/titanic.jpg" alt="" />
            <div class="descrip">
               <p class="titre">Titanic</p>
               <p class="intro">
                  Synopsis :
                  <input id="verif3f" class="input" type="checkbox" onclick="cache('verif3f', 'rf3')" />
               </p>
               <p class="synopsis" id="rf3">
                  Southampton, 10 avril 1912. Le paquebot le plus grand et le plus
                  moderne du monde, réputé pour son insubmersibilité, le "Titanic",
                  appareille pour son premier voyage. Quatre jours plus tard, il
                  heurte un iceberg. A son bord, un artiste pauvre et une grande
                  bourgeoise tombent amoureux.
               </p>
               <p class="intro">Genre : <a class="genre">Drame, Romance</a></p>
               <div class="commande"></div>
            </div>
         </article>
         <article>
            <img class="imgArticle" src="img/ultron.jpg" alt="" />
            <div class="descrip">
               <p class="titre">Avengers : l'ère d'ultron</p>
               <p class="intro">
                  Synopsis :
                  <input id="verif4f" class="input" type="checkbox" onclick="cache('verif4f', 'rf4')" />
               </p>
               <p class="synopsis" id="rf4">
                  Alors que Tony Stark tente de relancer un programme de maintien de
                  la paix jusque-là suspendu, les choses tournent mal et les
                  super-héros Iron Man, Captain America, Thor, Hulk, Black Widow et
                  Hawkeye vont devoir à nouveau unir leurs forces pour combattre le
                  plus puissant de leurs adversaires : le terrible Ultron, un être
                  technologique terrifiant qui s’est juré d’éradiquer l’espèce
                  humaine.
               </p>
               <p class="intro">
                  Genre : <a class="genre">Action, Aventure, Science Fiction</a>
               </p>
               <div class="commande"></div>
            </div>
         </article>
         <article>
            <img class="imgArticle" src="img/infinitywar.jpg" alt="" />
            <div class="descrip">
               <p class="titre">Avengers : Infinity War</p>
               <p class="intro">
                  Synopsis :
                  <input id="verif5f" class="input" type="checkbox" onclick="cache('verif5f', 'rf5')" />
               </p>
               <p class="synopsis" id="rf5">
                  Les Avengers et leurs alliés devront être prêts à tout sacrifier
                  pour neutraliser le redoutable Thanos avant que son attaque éclair
                  ne conduise à la destruction complète de l’univers.
               </p>
               <p class="intro">
                  Genre : <a class="genre">Action, Aventure, Fantastique</a>
               </p>
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