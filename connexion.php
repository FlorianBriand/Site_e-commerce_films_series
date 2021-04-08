<?php
include "head.php";
?>


<body>
    <?php


    $xml = simplexml_load_file("log.xml") or die("Error: Cannot create object");
    $id = $xml->{'id'};
    $mdp = $xml->{'mdp'};

    @$identifiant = $_POST["identifiant"];
    @$motdepasse = $_POST["mdp"];
    @$valider = $_POST["valider"];
    $message = '';
    $retour = 0;
    if (isset($valider)) {
        for ($i = 0; $i < sizeof($id); $i++) {
            if ($identifiant == $id[$i]) {
                if ($motdepasse == $mdp[$i]) {
                    $retour = 1;
                    break;
                } else {
                    $retour = 2;
                    break;
                }
            }
        }
        if ($retour == 1) {
            $message .= '<span class="reussite">Connexion réussie</span><br><br><a href="index.php">Retour à l\'accueil</a>';

            $_SESSION['id'] = $identifiant;
            $_SESSION['mdp'] = $motdepasse;
        } else if ($retour == 2) {
            $message .= '<span class="error">Le mot de passe ne correspond pas avec votre identifiant</span>';
        } else {
            $message .= '<span class="error">Echec de Connexion</span>';
        }
    }

    include "header.php";
    include "menu.php";


    ?>

    <form action="" method="POST">
        <article style="margin-left:35%;text-align:center;">
            <?php echo $message; ?>
            Identifiant :<br><br>
            <input type="text" id="identifiant" name="identifiant" placeholder="Entrez votre identifiant" /><br><br>

            Mot de passe :<br><br>
            <input type="text" id="mdp" name="mdp" placeholder="Entrez votre mot de passe" /><br><br>

            <input type="submit" name="valider" value="Envoi des données" />
        </article>
    </form>

    <?php
    include "footer.php";
    ?>
</body>

</html>