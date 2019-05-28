create database loja;

create table produtos (
    id integer auto_increment primary key, 
    nome varchar(255) not null, 
    preco decimal(10,2) not null
);

insert into produtos values 
(1, 'Carro', 20000),
(2, 'Motocicleta', 10000);

ALTER TABLE produtos add COLUMN descricao text;
update produtos set descricao = 'Teste da descricao para produtos';

create TABLE categorias (
    id INTEGER auto_increment primary key,
    nome varchar(255) not null
);

insert into categorias values 
(DEFAULT, 'Automoveis'),
(DEFAULT, 'Esportes');