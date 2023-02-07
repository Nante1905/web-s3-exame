create database takalo;
use takalo;
create table utilisateur (
    id int primary key not null auto_increment,
    nom varchar(250),
    email varchar(150),
    password varchar(150)
);
