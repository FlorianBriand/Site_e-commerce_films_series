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
     <section>
    <form name="myForm"> 
        <lengend>Mes champs texte</legend>
        <div>
            <label for="Datecontact">Date du contact :</label>
            <input type="date" id="date1" placeholder="Entrez la date du contact"/>
        </div>
        <span class="error" id="erreurdate1"></span><br/>
        <div>
            <label for="name">Nom :</label>
            <input type="text"  id="nom" placeholder="Entrez votre nom"/>
        </div>
        <span class="error" id="erreurnom"></span><br/>
        <div>
            <label for="prenom">Prénom :</label> 
            <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom"/>
        </div>
        <span class="error" id="erreurprenom"></span><br/>
        <div>
            <label for="mail">Mail :</label>
            <input type="text" id="mail" id="courriel" placeholder="Entrez votre mail"/>
        </div>
        <span class="error" id="erreurmail"></span><br/>
        <div>
            <label for="datenaissance">Date de naissance :</label> 
            <input type="date" id="date2" placeholder="Entrez votre date de naissance"/>
        </div>
        <span class="error" id="erreurdate2"></span><br/>
        <div>
            <label for="sujet">Sujet :</label> 
            <input type="text" placeholder="Entrez le sujet de votre mail"/>
        </div>
        <div>
            <label for="sujet">Contenu :</label> 
            <textarea>Tapez ici votre mail</textarea>
        </div>
        <div>
            <input type="button" value="Envoi des données" onclick="valider()"/>
        </div>
    </form>
    </section>
</body>
</html>