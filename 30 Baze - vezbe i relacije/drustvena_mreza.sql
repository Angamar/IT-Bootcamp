CREATE DATABASE drustvena_mreza;

CREATE TABLE korisnici
(
id INT PRIMARY KEY,
korisnicko_ime VARCHAR(45),
lozinka VARCHAR(20)
);

--foreign key mora da bude istog tipa kao i primary key

CREATE TABLE profili
(
id INT,
adresa VARCHAR(255),
telefon VARCHAR(25),
korisnik_id INT UNIQUE NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY profili(korisnik_id) REFERENCES korisnici(id)
);

CREATE TABLE objave
(
	id INT, 
	naslov_objave VARCHAR(45),
	PRIMARY KEY (id)
);

CREATE TABLE komentari
(
	id INT,
	tekst_komentara VARCHAR(100),
	id_objave INT,
	PRIMARY KEY (id),
	FOREIGN KEY (id_objave) REFERENCES objave(id)
);

CREATE TABLE kategorije
(
	id INT PRIMARY KEY,
	naziv VARCHAR(45)
);

CREATE TABLE kategorije_imaju_objave
(
id_kategorije INT,
id_objave INT,
FOREIGN KEY (id_kategorije) REFERENCES kategorije(id),
FOREIGN KEY (id_objave) REFERENCES objave(id)
);