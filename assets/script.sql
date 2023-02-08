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
    idutilisateur int,
    idcategorie int,
    titre varchar(150),
    description text,
    prix double,
    foreign key (idutilisateur) references utilisateur(id),
    foreign key (idcategorie) references categorie(id)
);

create table objetphoto (
    id int primary key not null auto_increment,
    idobjet int,
    url varchar(250),
    foreign key (idobjet) references objet(id)
);

create table proposition (
    id int not null auto_increment,
    idobjetmangataka int,
    idutilisateurmangataka int,
    idobjetangatahana int,
    idutilisateurangatahana int,
    dateproposition datetime,
    status int,
    primary key(id),
    foreign key (idobjetmangataka) references objet(id),
    foreign key (idutilisateurmangataka) references utilisateur(id),
    foreign key (idobjetangatahana) references objet(id),
    foreign key (idutilisateurangatahana) references utilisateur(id)
);

create table historiqueobjet (
    idobjet int,
    ancienutilisateur int,
    dateheurechange datetime,
    foreign key (idobjet) references objet(id),
    foreign key (ancienutilisateur) references utilisateur(id)
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
                                                                ('Machine a laver','Neuve',6300000,4),
                                                                ('maison','luxueuse et spacieuse',150000000,1),
                                                                ('ordinateur','neuf',6000000,2);


insert into objetphoto (url,idobjet) values ('blackhouse',5),
                                            ('mackbook',2),
                                            ('robefleuri',2),
                                            ('greencar',1),
                                            ('interieur-voiture',1),
                                            ('epson',3),
                                            ('salledebain',5),
                                            ('chambre',5),
                                            ('salon',5);
