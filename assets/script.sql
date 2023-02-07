create database takalo;
use takalo;
create table utilisateur (
    id int primary key not null auto_increment,
    nom varchar(250),
    email varchar(150),
    password varchar(150)
);

create table categorie (
    id int primary key not null auto_increment,
    nom varchar(100)
);

insert into utilisateur (nom,email,password) values ('Jean','jean@gmail.com','jean1'),
                                                    ('Chris','chris@gmail.com','chris1'),
                                                    ('Tony','tony@gmail.com','tony1'),
                                                    ('Dax','dax@gmail.com','dax1');

insert into categorie (nom) values ('Vetement'),
                                    ('Eléctronique'),
                                    ('Eléctro-ménager'),
                                    ('Construction'),
                                    ('Auto-moto');