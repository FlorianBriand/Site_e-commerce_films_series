CREATE DATABASE netchill;

USE netchill;

CREATE TABLE
IF NOT EXISTS categorie
(
    idcategorie INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    nom VARCHAR
(50)
);


CREATE TABLE
IF NOT EXISTS users
(
    idusers INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    nom VARCHAR
(50),
mdp VARCHAR
(50)

);

CREATE TABLE
IF NOT EXISTS Séries
(
    idserie INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    picture VARCHAR
(500) DEFAULT NULL,
    nom VARCHAR
(50),
    genre VARCHAR
(50),
    prix INT
(5),
    stock INT
(5),
    panier INT
(5),
    idcategorie INT
(5)
);


CREATE TABLE
IF NOT EXISTS Films
(
    idfilm INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    picture VARCHAR
(500) DEFAULT NULL,
    nom VARCHAR
(50),
    genre VARCHAR
(50),
    prix INT
(5),
    stock INT
(5),
    panier INT
(5),
    idcategorie INT
(5)
);


CREATE TABLE
IF NOT EXISTS Docus
(
    iddocu INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    picture VARCHAR
(500) DEFAULT NULL,
    nom VARCHAR
(50),
    genre VARCHAR
(50),
    prix INT
(5),
    stock INT
(5),
    panier INT
(5),
    idcategorie INT
(5)
);


INSERT INTO Films
    (picture, nom, genre, prix, stock, panier, idcategorie)
VALUES
    ('img/venom.jpg', 'Venom', 'Science Fiction, Action', '10', '8', '0', '1'),
    ('img/farfromhome.jpg', 'Spider-man : Far From Home', 'Action, Aventure', '10', '6', '0', '1'),
    ('img/titanic.jpg', 'Titanic', 'Drame, Romance', '10', '8', '0', '1'),
    ('img/ultron.jpg', 'Avengers : l ère d ultron', 'Action, Aventure, Science Fiction', '10', '1', '0', '1'),
    ('img/infinitywar.jpg', 'Avengers : Infinity War', 'Action, Aventure, Fantastique', '10', '1', '0', '1');

INSERT INTO Séries
    (picture, nom, genre, prix, stock, panier, idcategorie)
VALUES
    ('img/Prison.jpg', 'Prison Break', 'Drame, Thriller', '10', '5', '0', '2'),
    ('img/peaky.jpg', 'Peaky Blinders', 'Drame, Historique, Policier', '10', '6', '0', '2'),
    ('img/casa.jpg', 'La Casa De Papel', 'Drame, Thriller', '10', '6', '0', '2'),
    ('img/Lupin.jpg', 'Lupin', 'Drame, Policier', '10', '6', '0', '2'),
    ('img/Scorpion.jpg', 'Scorpion', 'Drame', '10', '6', '0', '2');

INSERT INTO Docus
    (picture, nom, genre, prix, stock, panier, idcategorie)
VALUES
    ('img/Guerre.jpg', 'Première guerre mondiale', '', '10', '6', '0', '3'),
    ('img/Icare.jpg', 'Icarus', '', '10', '6', '0', '3'),
    ('img/Mayday.jpg', 'Mayday', '', '10', '6', '0', '3'),
    ('img/topgear.jpg', 'TopGear', '', '10', '6', '0', '3'),
    ('img/Animal.jpg', 'Meilleur espoir animal', '', '10', '6', '0', '3');

INSERT INTO categorie
    (idcategorie, nom)
VALUES
    ('1', 'Films'),
    ('2', 'Séries'),
    ('3', 'Documentaires');