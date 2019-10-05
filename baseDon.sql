CREATE DATABASE ExamFinaleWeb;
USE ExamFinaleWeb;
CREATE TABLE Joueur(
    IDJOUEUR INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Nom VARCHAR(50),
    Prenom VARCHAR(100),
    DateNaissance DATE,
    PhotoProfil VARCHAR(100),
    Sexe VARCHAR(20),
    Email VARCHAR(50),
    MotdePasse VARCHAR(50),
    DateInscription DATE
);
INSERT INTO Joueur VALUES(1,"Bernadette","Emilie","1985-03-15",NULL,"Female","Emilie@gmail.com",sha1("Emilie"),NOW());
INSERT INTO Joueur VALUES(2,"Jeanette","Cathie","1994-06-18",NULL,"Female","Cathie@gmail.com",sha1("Cathie"),NOW());
INSERT INTO Joueur VALUES(3,"LeGrand","Marco","1986-03-07",NULL,"Male","Marco@gmail.com",sha1("Marco"),NOW());
INSERT INTO Joueur VALUES(4,"Duciot","Jean","1988-08-15",NULL,"Male","Jean@gmail.com",sha1("Jean"),NOW());
INSERT INTO Joueur VALUES(5,"LePetit","Christopher","1989-03-15",NULL,"Male","Christopher@gmail.com",sha1("Christopher"),NOW());
INSERT INTO Joueur VALUES(6,"Georges","Duhamel","1980-03-15",NULL,"Male","Duhamel@gmail.com",sha1("Duhamel"),NOW());
CREATE TABLE Administrateur(
    IdAdministrateur INT PRIMARY KEY,
    Email VARCHAR(100),
    MotsPasse VARCHAR(500)
);
CREATE TABLE Equipe(
    IdEquipe INT PRIMARY KEY,
    NomEquipe VARCHAR(50),
    Logo VARCHAR(100)
);
CREATE TABLE Matchs(
    IdMatch INT PRIMARY KEY,
    DateMatch DATE,
    HeureMatch TIME,
    Equipe1 VARCHAR(20),
    Equipe2 VARCHAR(20),
    Cote1 FLOAT,
    CoteN FLOAT,
    Cote2 FLOAT,
    ButsEquipe1 INT,
    ButsEquipe2 INT,
    ResultatMatch INT,
    EtatMatch INT
);
INSERT INTO Matchs VALUES(1,"2019-08-24","14:00:00","Madagascar","Nigeria",5.90,3.80,1.40,NULL,NULL,NULL,NULL);
INSERT INTO Matchs VALUES(2,"2019-08-24","06:30:00","Argentine","Espagne",4.50,2.40,3.40,NULL,NULL,NULL,NULL);
INSERT INTO Matchs VALUES(3,"2019-08-23","12:00:00","Russie","Algerie",4.50,2.40,3.40,NULL,NULL,NULL,NULL);
INSERT INTO Matchs VALUES(4,"2019-08-23","18:00:00","Suisse","Japon",5.90,3.80,1.40,NULL,NULL,NULL,NULL);
INSERT INTO Matchs VALUES(5,"2019-08-22","21:00:00","Espagne","Suede",4.50,2.40,3.40,NULL,NULL,NULL,NULL);
INSERT INTO Matchs VALUES(6,"2019-08-22","23:00:00","Danemark","Chine",5.90,3.80,1.40,NULL,NULL,NULL,NULL);
INSERT INTO Matchs VALUES(7,"2019-08-21","09:00:00","Croatie","France",6.80,3.20,1.40,2,1,2,1);
INSERT INTO Matchs VALUES(8,"2019-08-21","19:00:00","Allemagne","Tunisie",5.90,3.80,1.40,NULL,NULL,NULL,NULL);
INSERT INTO Matchs VALUES(9,"2019-08-21","22:15:00","Algerie","Egypte",3.80,1.20,5.40,NULL,NULL,NULL,NULL);
INSERT INTO Matchs VALUES(10,"2019-08-20","20:00:00","Senegal","Nigeria",4.50,2.40,3.40,2,1,1,1);
INSERT INTO Matchs VALUES(11,"2019-08-19","09:00:00","Angleterre","Usa",5.90,3.80,1.40,1,2,2,1);
INSERT INTO Matchs VALUES(12,"2019-08-19","06:00:00","Danemark","Belgique",4.50,2.40,3.40,1,1,3,1);
INSERT INTO Matchs VALUES(13,"2019-08-18","08:00:00","Congo","Madagascar",5.90,3.80,1.40,2,2,3,1);
INSERT INTO Matchs VALUES(14,"2019-08-18","14:00:00","Paysbas","Nigeria",4.50,2.40,3.40,1,0,1,1);
INSERT INTO Matchs VALUES(15,"2019-08-17","14:00:00","Dubai","Palestine",5.90,3.80,1.40,2,0,1,1);

CREATE TABLE Mise(
    IdMatch INT,
    IDJOUEUR INT,
    Montant SMALLINT,
    TypeMise INT,
    FOREIGN KEY(IdMatch) REFERENCES Matchs(IdMatch),
    FOREIGN KEY(IDJOUEUR) REFERENCES joueur(IDJOUEUR)
);
CREATE TABLE AjoutFonds(
    IdAjout INT PRIMARY KEY,
    IDJOUEUR INT,
    DateHeure DATE,
    Montant SMALLINT,
    NumTransaction VARCHAR(15),
    EtatValide INT,
    FOREIGN KEY(IDJOUEUR) REFERENCES joueur(IDJOUEUR)
);
CREATE TABLE mouvementFonds(
    IdMouvement INT PRIMARY KEY,
    DateHeure DATE,
    IDJOUEUR INT,
    TypeMouvement INT,
    Montant SMALLINT,
    FOREIGN KEY(IDJOUEUR) REFERENCES joueur(IDJOUEUR)
);