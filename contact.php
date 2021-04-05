<?php
session_start();
?>
<?php

@$nom = $_POST["nom"];
@$prenom = $_POST["prenom"];
@$email = $_POST["mail"];
@$datecontact = $_POST["date1"];
@$datenaissance = $_POST["date2"];
@$valider = $_POST["valider"];



if (isset($valider)) {
   $messagenom = '';
   $messageprenom = '';
   $messagemail = '';
   $messagedc = '';
   $messagedn = '';

   if (empty($nom))
      $messagenom .= '<span class="error">Nom laissé vide. </span>';
   if (empty($prenom))
      $messageprenom .= '<span class="error">Prénom laissé vide. </span>';
   if (empty($email))
      $messagemail .= '<span class="error">Email laissé vide. </span>';
   if (empty($datecontact))
      $messagedc .= '<span class="error">Date de contact laissé vide. </span>';
   if ($datecontact > '2021-04-03')
      $messagedc .= '<span class="error">Date de contact trop élevé. </span>';
   if (empty($datenaissance))
      $messagedn .= '<span class="error">Date de naissance laissé vide. </span>';
   elseif ($datenaissance < '1900-01-01')
      $messagedn .= '<span class="error">Vous êtes pas dans la tranche age. </span>';
   elseif ($datenaissance > '2005-12-31')
      $messagedn .= '<span class="error">Vous êtes pas dans la tranche age. </span>';
} else {
   $messagenom = '';
   $messageprenom = '';
   $messagemail = '';
   $messagedc = '';
   $messagedn = '';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/fichier.css">
   <script type="text/javascript" src="js/Projet.js"> </script>
   <title>Netchill</title>
</head>

<body>
   <?php
   include "header.php";
   include "menu.php";
   ?>
   <section>
      <form action="" method="POST" onsubmit="valider()">
         <lengend>Mes champs texte</legend>
            <div>
               <label for="Datecontact">Date du contact :</label>
               <input type="date" id="date1" name="date1" placeholder="Entrez la date du contact" />
            </div>
            <span class="error" id="erreurdate1"><?php echo $messagedc ?></span><br />
            <div>
               <label for="name">Nom :</label>
               <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" />
            </div>
            <span class="error" id="erreurnom"><?php echo $messagenom ?></span><br />
            <div>
               <label for="prenom">Prénom :</label>
               <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" />
            </div>
            <span class="error" id="erreurprenom"><?php echo $messageprenom ?></span><br />
            <div>
               <label for="mail">Mail :</label>
               <input type="text" id="mail" name="mail" id="courriel" placeholder="Entrez votre mail" />
            </div>
            <span class="error" id="erreurmail"><?php echo $messagemail ?></span><br />
            <div>
               <label for="datenaissance">Date de naissance :</label>
               <input type="date" id="date2" name="date2" placeholder="Entrez votre date de naissance" />
            </div>
            <span class="error" id="erreurdate2"><?php echo $messagedn ?></span><br />
            <div>
               <label for="sujet">Sujet :</label>
               <input type="text" id="sujet" placeholder="Entrez le sujet de votre mail" />
            </div>
            <div>
               <label for="sujet">Contenu :</label>
               <textarea id="message">Tapez ici votre mail</textarea>
            </div>
            <div>
               <input type="submit" name="valider" value="Envoi des données" />
            </div>
      </form>
   </section>
   <?php
   include "footer.php";
   ?>
</body>

</html>