<?php
include "head.php";
?>


<body style="background-color: #141414;">
    <?php



    @$identifiant = $_POST["identifiant"];
    @$motdepasse = $_POST["mdp"];
    @$valider = $_POST["valider"];
    $message = '';
    $retour = 0;
    $verif = 0;
    if (isset($valider)) {
        $messageretour = '';
        $requete = "SELECT * FROM users WHERE nom = '$identifiant'";
        $resultat = recup($requete);
        while ($bdd = mysqli_fetch_array($resultat)) {
            $verif = 1;
            if (count($bdd) != 0) {
                if (($_POST["mdp"] == $bdd['mdp']) && ($_POST["identifiant"] == $bdd['nom'])) {
                    $_SESSION['id'] = $identifiant;
                    $_SESSION['mdp'] = $motdepasse;
                    $messageretour .= '<span class="reussite">Connexion avec succès</span>';
                } elseif (($_POST["mdp"] != $bdd['mdp']) && ($_POST["identifiant"] == $bdd['nom'])) {
                    $messageretour .= '<span class="error">Mot de passe incorrect</span>';
                } else {
                    $messageretour .= '<span class="error">Echec de la connexion 2</span>';
                }
            }
        }
        if ($verif == 0) {
            $messageretour .= '<span class="error">Echec de la connexion</span>';
        }
    } else {
        $messageretour = '';
    }

    include "header.php";
    include "menu.php";
    ?>

    <div class=" flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class=" space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-white">
                    Page de connexion
                </h2>
            </div>
            <form class="space-y-6" action="" method="POST">
                <?= $message; ?>
                <?= $messageretour; ?>
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