<?php
$_SESSION['categories'] = array("Film", "Serie", "Documentaire");

if (!isset($_SESSION['produits'])) {
    $_SESSION['produits'] = json_decode(file_get_contents("donnees.json"));
}

    
/*
$_SESSION['produits'] = array(
    "Film" => array(
        array(
            "img" => "img/venom.jpg",
            "nom" => "Venom",
            "synopsis" => "Possédé par un symbiote qui agit de manière autonome, le journaliste Eddie Brock devient le protecteur létal Venom.",
            "genre" => "Science Fiction, Action",
            "prix" => 10,
            "stock" => 8,
        ),
        array(
            "img" => "img/farfromhome.jpg",
            "nom" => "Spider-man : Far From Home",
            "synopsis" => "L'araignée sympa du quartier décide de rejoindre ses meilleurs
            amis Ned, MJ, et le reste de la bande pour des vacances en Europe.
            Cependant, le projet de Peter de laisser son costume de
            super-héros derrière lui pendant quelques semaines est rapidement
            compromis quand il accepte à contrecoeur d'aider Nick Fury à
            découvrir le mystère de plusieurs attaques de créatures, qui
            ravagent le continent !",
            "genre" => "Action, Aventure",
            "prix" => 10,
            "stock" => 6,
        ),
        array(
            "img" => "img/titanic.jpg",
            "nom" => "Titanic",
            "synopsis" => "Southampton, 10 avril 1912. Le paquebot le plus grand et le plus
            moderne du monde, réputé pour son insubmersibilité, le Titanic,
            appareille pour son premier voyage. Quatre jours plus tard, il
            heurte un iceberg. A son bord, un artiste pauvre et une grande
            bourgeoise tombent amoureux.",
            "genre" => "Drame, Romance",
            "prix" => 10,
            "stock" => 8,
        ),
        array(
            "img" => "img/ultron.jpg",
            "nom" => "Avengers : l'ère d'ultron",
            "synopsis" => "Alors que Tony Stark tente de relancer un programme de maintien de
            la paix jusque-là suspendu, les choses tournent mal et les
            super-héros Iron Man, Captain America, Thor, Hulk, Black Widow et
            Hawkeye vont devoir à nouveau unir leurs forces pour combattre le
            plus puissant de leurs adversaires : le terrible Ultron, un être
            technologique terrifiant qui s’est juré d’éradiquer l’espèce
            humaine.",
            "genre" => "Action, Aventure, Science Fiction",
            "prix" => 10,
            "stock" => 0,
        ),
        array(
            "img" => "img/infinitywar.jpg",
            "nom" => "Avengers : Infinity War",
            "synopsis" => "Les Avengers et leurs alliés devront être prêts à tout sacrifier
            pour neutraliser le redoutable Thanos avant que son attaque éclair
            ne conduise à la destruction complète de l’univers.",
            "genre" => "Action, Aventure, Fantastique",
            "prix" => 10,
            "stock" => 1,
        ),

    ),
    "Serie" => array(
        array(
            "img" => "img/Prison.jpg",
            "nom" => "Prison Break",
            "synopsis" => "Michael Scofield s'engage dans une véritable lutte contre la
            montre : son frère Lincoln est dans le couloir de la mort, en
            attente de son exécution. Persuadé de son innocence mais à court
            de solutions, Michael décide de se faire incarcérer à son tour
            dans le pénitencier d'état de Fox River pour organiser leur
            évasion...",
            "genre" => "Drame, Thriller",
            "prix" => 10,
            "stock" => 5,
        ),
        array(
            "img" => "img/peaky.jpg",
            "nom" => "Peaky Blinders",
            "synopsis" => "En 1919, à Birmingham, soldats, révolutionnaires politiques et
            criminels combattent pour se faire une place dans le paysage
            industriel de l'après-Guerre. Le Parlement s'attend à une violente
            révolte, et Winston Churchill mobilise des forces spéciales pour
            contenir les menaces. La famille Shelby compte parmi les membres
            les plus redoutables.",
            "genre" => "Drame, Historique, Policier",
            "prix" => 10,
            "stock" => 6,
        ),
        array(
            "img" => "img/casa.jpg",
            "nom" => "La Casa De Papel",
            "synopsis" => "Huit voleurs font une prise d'otages dans la Maison royale de la
            Monnaie d'Espagne, tandis qu'un génie du crime manipule la police
            pour mettre son plan à exécution.",
            "genre" => "Drame, Thriller",
            "prix" => 10,
            "stock" => 6,
        ),
        array(
            "img" => "img/Lupin.jpg",
            "nom" => "Lupin",
            "synopsis" => "Il y a 25 ans, la vie du jeune Assane Diop est bouleversée lorsque
            son père meurt après avoir été accusé d'un crime qu'il n'a pas
            commis. Aujourd’hui, Assane va s'inspirer de son héros, Arsène
            Lupin - Gentleman Cambrioleur, pour le venger…",
            "genre" => "Drame, Policier",
            "prix" => 10,
            "stock" => 6,
        ),
        array(
            "img" => "img/Scorpion.jpg",
            "nom" => "Scorpion",
            "synopsis" => "Walter O'Brien, surnommé Scorpion, un homme possédant le 4ème
            Q.I. le plus élevé du monde, a recruté quelques-uns des plus
            grands génies de la planète pour fonder une société chargée de
            résoudre des crises urgentes et d'ampleur considérable, de celles
            que même la CIA ne parvient pas à régler seule. Inadaptés
            socialement, ils apprennent ensemble à vivre en communauté, à
            dépasser leurs peurs, leurs phobies et à vaincre leur solitude...",
            "genre" => "Drame",
            "prix" => 10,
            "stock" => 6,
        ),
    ),
    "Documentaire" => array(
        array(
            "img" => "img/Guerre.jpg",
            "nom" => "Première guerre mondiale",
            "synopsis" => "",
            "genre" => "",
            "prix" => 10,
            "stock" => 6,
        ),
        array(
            "img" => "img/Icare.jpg",
            "nom" => "Icarus",
            "synopsis" => "",
            "genre" => "",
            "prix" => 10,
            "stock" => 6,
        ),
        array(
            "img" => "img/Mayday.jpg",
            "nom" => "Mayday",
            "synopsis" => "",
            "genre" => "",
            "prix" => 10,
            "stock" => 6,
        ),
        array(
            "img" => "img/topgear.jpg",
            "nom" => "TopGear",
            "synopsis" => "",
            "genre" => "",
            "prix" => 10,
            "stock" => 6,
        ),
        array(
            "img" => "img/Animal.jpg",
            "nom" => "Meilleur espoir animal",
            "synopsis" => "",
            "genre" => "",
            "prix" => 10,
            "stock" => 6,
        ),
    ),
);*/
