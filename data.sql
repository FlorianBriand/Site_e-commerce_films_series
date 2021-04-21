INSERT INTO Films
    (picture, nom, genre, prix, stock, panier, idcategorie)
VALUES
    ('venom.jpg', 'Venom', 'Science Fiction, Action', '10', '8', '0', '1'),
    ('farfromhome.jpg', 'Spider-man : Far From Home', 'Action, Aventure', '10', '6', '0', '1'),
    ('titanic.jpg', 'Titanic', 'Drame, Romance', '10', '8', '0', '1'),
    ('ultron.jpg', 'Avengers : l ère d ultron', 'Action, Aventure, Science Fiction', '10', '1', '0', '1'),
    ('infinitywar.jpg', 'Avengers : Infinity War', 'Action, Aventure, Fantastique', '10', '1', '0', '1');

INSERT INTO Series
    (picture, nom, genre, prix, stock, panier, idcategorie)
VALUES
    ('Prison.jpg', 'Prison Break', 'Drame, Thriller', '10', '5', '0', '2'),
    ('peaky.jpg', 'Peaky Blinders', 'Drame, Historique, Policier', '10', '6', '0', '2'),
    ('casa.jpg', 'La Casa De Papel', 'Drame, Thriller', '10', '6', '0', '2'),
    ('Lupin.jpg', 'Lupin', 'Drame, Policier', '10', '6', '0', '2'),
    ('Scorpion.jpg', 'Scorpion', 'Drame', '10', '6', '0', '2');

INSERT INTO Documentaires
    (picture, nom, genre, prix, stock, panier, idcategorie)
VALUES
    ('Guerre.jpg', 'Première guerre mondiale', '', '10', '6', '0', '3'),
    ('Icare.jpg', 'Icarus', '', '10', '6', '0', '3'),
    ('Mayday.jpg', 'Mayday', '', '10', '6', '0', '3'),
    ('topgear.jpg', 'TopGear', '', '10', '6', '0', '3'),
    ('Animal.jpg', 'Meilleur espoir animal', '', '10', '6', '0', '3');

INSERT INTO categorie
    (idcategorie, nom)
VALUES
    ('1', 'Films'),
    ('2', 'Series'),
    ('3', 'Documentaires');