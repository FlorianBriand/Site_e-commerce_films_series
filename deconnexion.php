<?php
session_start();
session_destroy();
include "head.php";
?>

<body style="background-color: #141414;">
    <?php
    include "header.php";
    include "menu.php";
    ?>

    <span class="text-green-500 text-2xl">Déconnexion réussie</span>

</body>

</html>