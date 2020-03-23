CREATE TABLE kompozitori 
( 
	id INT AUTO_INCREMENT, 
	ime_prezime VARCHAR(100), 
	PRIMARY KEY (id) 
);

CREATE TABLE instrumenti 
(
	Id INT AUTO_INCREMENT,
	naziv VARCHAR(50),
	PRIMARY KEY (id)
);

CREATE TABLE kompozicije
(
	id INT AUTO_INCREMENT,
	naziv VARCHAR(100),
	trajanje DECIMAL (9,2)
	id_period INT,
	PRIMARY KEY (id),
	FOREIGN KEY (id_period) REFERENCES (periodi.id)
);

CREATE TABLE komponuje
(
    id INT AUTO_INCREMENT,
    id_kompozicije INT,
    id_kompozitora INT,
    PRIMARY KEY (id),
    FOREIGN KEY (id_kompozicije) REFERENCES kompozicije(id),
    FOREIGN KEY (id_kompozitora) REFERENCES kompozitori(id)
);

CREATE TABLE svira
(
    id INT AUTO_INCREMENT,
    id_kompozicije INT,
    id_instrumenta INT,
    PRIMARY KEY (id),
    FOREIGN KEY (id_kompozicije) REFERENCES kompozicije(id),
    FOREIGN KEY (id_instrumenta) REFERENCES instrumenti(id)
)

INSERT INTO periodi (naziv)
VALUES 
("Klasicizam"),
("Romantizam"),
("Barok")

INSERT INTO kompozitori(ime_prezime)
VALUES 
("Johan Sebastijan Bah"),
("Volfgang Amadeus Mocart"),
("Bendzamin Britn"),
("Bela Bartkok"),
("Ludvig van Betoven");

INSERT INTO instrumenti (naziv)
VALUES 
("Klavir"),
("Gitara"),
("Violina"),
("Flauta"),
("Ksilofon"),
("Triangl"),
("Harfa"),
("Truba"),
("Kontrabas")

INSERT INTO kompozicije (naziv, trajanje, id_perioda)
VALUES 
("Deveta simfonija", 45, 1),
("Mala nocna muzika", 15, 1),
("Tokata i fuga u d-molu", 9, 2);

SELECT * 
FROM kompozicije
WHERE trajanje = (SELECT MAX(trajanje) FROM kompozicije);