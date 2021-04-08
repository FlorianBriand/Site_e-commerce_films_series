<?php
include "head.php";
?>

<body class="bg-gray-900">
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
                            <td><img class="imgArticle" src="img/<?php echo $tab[$j]->{'img'}; ?>" alt="" /></td>
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
    </table>
    <div class="flex flex-col">
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
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php
                            for ($i = 0; $i < sizeof($_SESSION['categories']); $i++) {

                                $tab = $_SESSION['produits']->{$_SESSION['categories'][$i]};

                                for ($j = 0; $j < sizeof($tab); $j++) {
                                    if ($tab[$j]->{'panier'} > 0) {
                                        $vide = 0;
                                        $prixtt = $prixtt + $tab[$j]->{'prix'} * $tab[$j]->{'panier'};

                            ?>


                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            Jane Cooper
                                                        </div>
                                                        <div class="text-sm text-gray-500">
                                                            jane.cooper@example.com
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900"><?php echo $tab[$j]->{'panier'}; ?></div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    Active
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <?php echo $tab[$j]->{'prix'}; ?>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            </td>
                                        </tr>
                            <?php
                                    }
                                }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <?php
    if ($vide == 1) {
    ?>
        <span class=" error">
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