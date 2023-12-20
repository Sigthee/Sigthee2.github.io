CREATE DATABASE bateau;

USE bateau;

CREATE TABLE IF NOT EXISTS bateau (
    id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom VARCHAR(255) NOT NULL,
    modele ENUM("voilier", "peche", "mouche", "tourisme") NOT NULL,
    taille VARCHAR(255) NOT NULL,
    owner VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS moteur (
    id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    periodicite VARCHAR(255) NOT NULL,
    date_last DATE NOT NULL,
    date_next DATE NOT NULL
);

CREATE TABLE IF NOT EXISTS electricite (
    id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    periodicite VARCHAR(255) NOT NULL,
    date_last DATE NOT NULL,
    date_next DATE NOT NULL
);

CREATE TABLE IF NOT EXISTS electronique (
    id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    periodicite VARCHAR(255) NOT NULL,
    date_last DATE NOT NULL,
    date_next DATE NOT NULL
);

CREATE TABLE IF NOT EXISTS circuit_eau_douce (
    id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    periodicite VARCHAR(255) NOT NULL,
    date_last DATE NOT NULL,
    date_next DATE NOT NULL
);

CREATE TABLE IF NOT EXISTS coque (
    id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    periodicite VARCHAR(255) NOT NULL,
    date_last DATE NOT NULL,
    date_next DATE NOT NULL
);

CREATE TABLE IF NOT EXISTS greement (
    id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    periodicite VARCHAR(255) NOT NULL,
    date_last DATE NOT NULL,
    date_next DATE NOT NULL
);

CREATE TABLE IF NOT EXISTS carnet_entretien (
    id_bateau INT(11) NOT NULL,
    moteur INT(11) NOT NULL,
    electricite INT(11) NOT NULL,
    electronique INT(11) NOT NULL,
    circuit_eau_douce INT(11) NOT NULL,
    coque INT(11) NOT NULL,
    greement INT(11),
    CONSTRAINT bateauExist FOREIGN KEY (id_bateau) REFERENCES bateau(id),
    CONSTRAINT moteurExist FOREIGN KEY (moteur) REFERENCES moteur(id),
    CONSTRAINT electriciteExist FOREIGN KEY (electricite) REFERENCES electricite(id),
    CONSTRAINT electroniqueExist FOREIGN KEY (electronique) REFERENCES electronique(id),
    CONSTRAINT circuitExist FOREIGN KEY (circuit_eau_douce) REFERENCES circuit_eau_douce(id),
    CONSTRAINT coqueExist FOREIGN KEY (coque) REFERENCES coque(id),
    CONSTRAINT greementExist FOREIGN KEY (greement) REFERENCES greement(id)
);

CREATE TABLE IF NOT EXISTS port (
    id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    depart VARCHAR(255) NOT NULL,
    arrive VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS coordonee (
    id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    longitude DECIMAL(11, 8) NOT NULL,
    latitude DECIMAL(10, 8) NOT NULL
);

CREATE TABLE IF NOT EXISTS carnet_bord (
    id_bateau INT(11) NOT NULL,
    liste_port INT(11) NOT NULL,
    liste_coordonee INT(11) NOT NULL,
    CONSTRAINT bateauExist2 FOREIGN KEY (id_bateau) REFERENCES bateau(id),
    CONSTRAINT portExist FOREIGN KEY (liste_port) REFERENCES port(id),
    CONSTRAINT coordoneeExist FOREIGN KEY (liste_coordonee) REFERENCES coordonee(id)
);