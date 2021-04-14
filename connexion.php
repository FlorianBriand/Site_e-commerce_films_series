<?php
include "head.php";
?>


<body style="background-color: #141414;">
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


    /*

    <form action="" method="POST">
        <article style="margin-left:35%;text-align:center;">
            <?= $message; ?>
            Identifiant :<br><br>
            <input type="text" id="identifiant" name="identifiant" placeholder="Entrez votre identifiant" /><br><br>

            Mot de passe :<br><br>
            <input type="text" id="mdp" name="mdp" placeholder="Entrez votre mot de passe" /><br><br>

            <input type="submit" name="valider" value="Envoi des données" />
        </article>
    </form>*/ ?>

    <div class=" flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class=" space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-white">
                    Page de connexion
                </h2>
            </div>
            <form class="space-y-6" action="" method="POST">
                <?= $message; ?>
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <input id="identifiant" name="identifiant" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-red-900  placeholder-red-900 text-red-900  rounded-t-md focus:outline-none focus:ring-red-900  focus:border-red-900 focus:z-10 sm:text-sm" placeholder="Identifiant">
                    </div>
                    <div>
                        <input id="mdp" name="mdp" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-red-900 placeholder-red-900 text-red-900 rounded-b-md focus:outline-none focus:ring-red-900 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Mot de passe">
                    </div>
                </div>

                <div>
                    <button type="submit" name="valider" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-900 hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 ">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-white group-hover:text-red-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        Se connecter
                    </button>
                </div>
            </form>
        </div>
    </div>


    <?php
    include "footer.php";
    ?>
</body>

</html>