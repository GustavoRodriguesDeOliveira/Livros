create database Livros;

use livros;

create table cadastro(
  codigo int not null primary key auto_increment,
  nome varchar(100) not null,
  endereco varchar(100) not null,
  telefone varchar(11) not null,
  datan date not null,
  login varchar(20) not null,
  senha varchar(15) not null
)engine = InnoDB;

create table livro(
  codigo int not null primary key auto_increment,
  titulo varchar(20) not null,
  ano date not null,
  valor decimal(5,2) not null,
  unidades int not null
)engine = InnoDB;

