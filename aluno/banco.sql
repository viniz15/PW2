CREATE DATABASE alunos;
USE alunos;

CREATE TABLE alunos(
    id int AUTO_INCREMENT PRIMARY KEY,
    ra int,
    nome varchar(100),
    periodo varchar(50),
    curso varchar(50)
    );