CREATE DATABASE CRUD;

USE CRUD;

CREATE TABLE livre (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(255),
    ISBN VARCHAR(50),
    resume TEXT
);