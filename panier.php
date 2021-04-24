<?php

include_once("head.php");
?>

<body style="background-color: #141414;">
    <?php
    include "header.php";
    include "menu.php";

    $vide = 1;
    $prixtt = 0;

    ?>

    <div id="tableau" class="flex flex-col items-center mt-20">
        <div class="-my-2 sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class=" divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Quantité
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nom
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Image
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Prix
                                </th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php
                            for ($i = 0; $i < sizeof($_SESSION['categories']); $i++) {
                                for ($j = 0; $j < sizeof($_SESSION['produits'][$_SESSION['categories'][$i]]); $j++) {
                                    $panier = $_SESSION['produits'][$_SESSION['categories'][$i]][$j]['panier'];
                                    $prix = $_SESSION['produits'][$_SESSION['categories'][$i]][$j]['prix'];
                                    $nom = $_SESSION['produits'][$_SESSION['categories'][$i]][$j]['nom'];
                                    $picture = $_SESSION['produits'][$_SESSION['categories'][$i]][$j]['picture'];

                                    if ($panier > 0) {
                                        $vide = 0;
                                        $prixtt = $prixtt + $prix * $panier;
                            ?>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10 ">
                                                        <?= $panier; ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 ">
                                                        <?= $nom; ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=" ">
                                                <div class="p-4">
                                                    <div class=" ">
                                                        <img class="imgArticle w-32" src="img/<?= $picture; ?>" alt="" />
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10 ">
                                                        <?= $panier * $prix; ?>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                            }
                            if ($vide == 0) {
                                ?>
                                <tr class=" text-center bg-gray-50">
                                    <td>Prix total</td>
                                    <td> </td>
                                    <td></td>
                                    <td><?= $prixtt; ?> </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
                <input type="button" id="bStock" class=" mt-2 px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700" onclick="loadPanier()" value="Valider la commande" />
            </div>
        </div>
    </div>


    <?php
    if ($vide == 1) {
    ?>
        <span class="text-2xl ml-40 text-red-700">
            Le panier est vide
        </span>
    <?php
    }
    ?>

    <?php
    include "footer.php";
    ?>
</body>

</html>