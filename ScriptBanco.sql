create database BDPHP;
use BDPHP;

Create table if not exists Produto(
	codigo int primary key auto_increment,
    nome varchar(40) not null,
    codBarra varchar(40) not null unique
);
Select * from Produto;