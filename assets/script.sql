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

create table objet (
    id int primary key not null auto_increment,
    titre varchar(150),
    description text,
    prix double,
    idutilisateur int,
    foreign key (idutilisateur) references utilisateur(id)
);

create table objetphoto (
    id int primary key not null auto_increment,
    url varchar(250),
    idobjet int,
    foreign key (idobjet) references objet(id)
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

insert into objet (titre,description,prix,idutilisateur) values ('Voiture','En bon etat',200000000,2),
                                                                ('Robe','Usee',1500,1),
                                                                ('Imprimante','Usee',35000,3),
                                                                ('Machine a laver','Neuve',6300000,4);
                                                            