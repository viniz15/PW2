drop database etimpwiicontact;
create database etimpwiicontact;
use etimpwiicontact;
create table aluno(
    id int primary key auto_increment,
    rm varchar (50),
    nome  varchar (50),
    email varchar (50),
    cpf varchar (50)
);
