CREATE DATABASE entreprise;

USE entreprise;

CREATE TABLE personne (
    personneId INT(11) PRIMARY KEY AUTO_INCREMENT,
    personneCode VARCHAR(255) NOT NULL,
    adresseCourriel VARCHAR(255) NOT NULL
);

CREATE TABLE tiers (
    noSiret INT(11) NOT NULL,
    raisonSociale VARCHAR(255) NOT NULL,
    CONSTRAINT tiersExist FOREIGN KEY (noSiret) REFERENCES personne (personneId)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE collaborateur (
    matricule INT(11) NOT NULL,
    nir INT(15) NOT NULL,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    dateEmbauche DATE NOT NULL,
    salaire FLOAT NOT NULL,
    CONSTRAINT personneExist FOREIGN KEY (matricule) REFERENCES personne (personneId)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE directeur (
    primeBilan INT NOT NULL,
    CONSTRAINT matriculeExist FOREIGN KEY (primeBilan) REFERENCES collaborateur (matricule)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE employe (
    profil INT(11) NOT NULL,
    CONSTRAINT employeExist FOREIGN KEY (profil) REFERENCES collaborateur (matricule)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE service (
    serviceId INT(11) NOT NULL,
    serviceCode INT(11) NOT NULL,
    serviceLibelle INT(11) NOT NULL,
    CONSTRAINT serviceExist FOREIGN KEY (serviceId) REFERENCES collaborateur (matricule)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);