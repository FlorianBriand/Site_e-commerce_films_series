<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/fichier.css" />
    <title>Netchill</title>
    <script type="text/javascript" src="js/Projet.js"></script>
</head>

<body>
    <?php
    include "header.php";
    include "menu.php";

    $vide = 1;
    $prixtt = 0;
    ?>
    <table>
        <thead>
            <tr>
                <th>Quantité</th>
                <th>Nom</th>
                <th>Image</th>
                <th>Prix</th>

            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < sizeof($_SESSION['categories']); $i++) {

                $tab = $_SESSION['produits']->{$_SESSION['categories'][$i]};

                for ($j = 0; $j < sizeof($tab); $j++) {
                    if ($tab[$j]->{'panier'} > 0) {
                        $vide = 0;
                        $prixtt = $prixtt + $tab[$j]->{'prix'} * $tab[$j]->{'panier'};

            ?>
                        <tr>
                            <td><?php echo $tab[$j]->{'panier'}; ?> </td>
                            <td><?php echo $tab[$j]->{'nom'}; ?> </td>
                            <td><img class="imgArticle" style="width: 100px;height:auto;" src=<?php echo $tab[$j]->{'img'}; ?> alt="" /></td>
                            <td><?php echo $tab[$j]->{'prix'}; ?> </td>
                        </tr>
                <?php
                    }
                }
            }
            if ($vide == 0) {
                ?>
                <tr>
                    <td>Prix total</td>
                    <td> </td>
                    <td></td>
                    <td><?php echo $prixtt; ?> </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table><?php
            if ($vide == 1) {
                echo '<span class="error" style="margin-left:35%;">Le panier est vide';
            }
            ?>

    <?php
    include "footer.php";
    ?>
</body>

</html>