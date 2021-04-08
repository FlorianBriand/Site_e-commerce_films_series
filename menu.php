<div class="h-screen w-100  float-left">
    <menu class="bg-black w-60 float-left grid grid-cols-1 px-8 text-center text-white text-2xl my-32 p-4 rounded-r-3xl ">
        <a class="mt-5 " href="index.php">Accueil</a>
        <span class="text-red-700 my-3 underline ">Nos produits</span>


        <?php
        for ($i = 0; $i < sizeof($_SESSION['categories']); $i++) {
        ?>
            <a class="text-2xl text-left" href="films.php?cat=<?php echo $_SESSION['categories'][$i]; ?>">
                - <?php echo $_SESSION['categories'][$i]; ?>
            </a>
        <?php
        }
        ?>
        <a class="my-5 " href="contact.php">Nous contacter</a>
    </menu>
</div>