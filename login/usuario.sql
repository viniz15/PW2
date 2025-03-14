create database usuariopwii;

use usuariopwii;

CREATE TABLE usuarios (
    id INT AUTO_iNCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    email VARCHAR(100),
    senha VARCHAR (32)
)
