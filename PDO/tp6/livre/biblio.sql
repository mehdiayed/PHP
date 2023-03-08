create table etudiant (
    codeetudiant integer primary key,
    nom varchar(30),
    prenom varchar(30), 
    adresse varchar(30), 
    classe varchar(30)
);



create table livre (
    codelivre integer primary key,
    titre varchar(30), 
    auteur varchar(30), 
    dateedition date 
);


create table emprunter (
    dateemprunt date primary key,
    codeetudiant integer,
    codelivre integer,
    constraint c1 foreign key (codeetudiant) references etudiant (codeetudiant),
    constraint c2 foreign key (codelivre) references livre (codelivre)
);
