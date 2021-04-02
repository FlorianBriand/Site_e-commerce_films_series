<menu>
    <a href="index.php">Accueil</a> <br /><br />
    Nos produits <br /><br />

    <?php
    for ($i = 0; $i < sizeof($_SESSION['categories']); $i++) {

        echo '<a href="films.php?cat=' . $_SESSION['categories'][$i] . '">';

        echo $_SESSION['categories'][$i];
    ?>
        </a> <br /><br />
    <?php
    }
    ?>
    <a href="contact.php">Contact</a>
</menu>