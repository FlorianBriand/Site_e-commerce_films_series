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
IF NOT EXISTS Series
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
IF NOT EXISTS Documentaires
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
