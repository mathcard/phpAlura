create database loja;

create table produtos (
    id integer auto_increment primary key, 
    nome varchar(255) not null, 
    preco decimal(10,2) not null
    );


insert into produtos values (1, 'Carro', 20000);
insert into produtos values (2, 'Motocicleta', 10000);