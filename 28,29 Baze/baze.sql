--brisanje tabele
DROP TABLE it_bootcamp.tasks;

--brisanje baze
DROP DATABASE it_bootcamp;

--ravljenje baze
CREATE DATABASE it_bootcamp;

--kreiranje tabele zadaci
CREATE TABLE IF NOT EXISTS zadaci
(
    id INT,
    naslov VARCHAR(100) NOT NULL,
    datum_pocetka DATE, 
    datum_kraja DATE,
    `status`TINYINT,
    opis TEXT,
    prioritet INT DEFAULT 1,
	PRIMARY KEY (id)
);

--dodavanje kolone u postojecu tabelu
ALTER TABLE potrosaci
ADD god_rodjenja INT;

--IZMENA KOLONE U TABELI
ALTER TABLE potrosaci
MODIFY `god_rodjenja` INT 4;

--brisanje kolone iz tabele
ALTER TABLE potrosaci
DROP god_rodjenja;

--popunjavanje 
INSERT INTO firma.potrosaci(id, korisnicko_ime,ime_prezime, godine, drzava, adresa, plata)
VALUES (111, "Angamar", "Aleksa Stojanovic", 24, "Srbija", "Todora Milovanovica 49", 54000.27),
(112, "BokaRockPrincess", "Bojana Brankovic", 24, "Srbija", "Krste Brankovica 6", 44050.34),
(113, "5K", "Katarina Petrovic", 24, "Srbija", "Zelengorska 30", 50000.27);

INSERT INTO zadaci (id, naslov, datum_pocetka, datum_kraja, `status`, opis, prioritet)
VALUES 	(1, "Zadatak 1", "2019-05-01", "2019-06-01", 1, "Zadatak 1", 1),
        (2, "Zadatak 2", "2019-09-01", "2019-12-31", 0, "Zadatak 1", 3),
        (3, "Zadatak 3", "2018-05-05", "2019-02-02", 1, "Zadatak 3", 2);


-- selektovanje id, ime_prezime i korisnicko_ime iz tabele potrosaci
SELECT id, ime_prezime, korisnicko_ime
FROM potrosaci

--selektovanje svih polja
SELECT *
FROM potrosaci


Zadaci
--sve kolone customers

SELECT * 
FROM potrosaci;

--ime prezime godine
SELECT ime_prezime, godine 
FROM potrosaci;

--plata
SELECT plata FROM potrosaci

--tasks sva
SELECT * FROM zadaci

--naslov, status prioritet
SELECT naslov, `status`, prioritet FROM zadaci

--selektovanje razlicitih drzava (bez ponavljanja)
SELECT DISTINCT drzava FROM `potrosaci`

SELECT DISTINCT `status` FROM `zadaci`
SELECT DISTINCT prioritet FROM `zadaci`

--WHERE
SELECT id, ime_prezime, korisnicko_ime, godine FROM potrosaci WHERE godine>30;
<, >, <=, >=, = 

--selektovati korisnike iz srbije, vecu od 500 iz tabele korisnik
SELECT * FROM `potrosaci` WHERE drzava LIKE "Srbija";
SELECT * FROM `potrosaci` WHERE plata>50000;


-- procitati sve zadatke ciji je status akticvan, ciji je prioritet nizak
SELECT * FROM `zadaci` WHERE `status`=0;
SELECT * FROM `zadaci` WHERE `prioritet`=3;

--Operatori
--Strogo vece >
--Strogo manje <
--Vece ili jednako >=
--Manje ili jednako <=
--Razlicito !=, <>, NOT
--izmedju BETWEEN 5 AND 15
--U nekom intervalu IN ("Srbija", "Crna Gora", "Madjarska")

Selektovanje svih klijanata cije je drzava srbija ili cg ili madjarska



SELECT *
FROM potrosaci
WHERE drzava IN ("Srbija", "Crna Gora", "Madjarska");

--na pocetno slovo "j"
SELECT *
FROM potrosaci
WHERE korisnicko_ime LIKE "J%";

--zavrsava se na "na"
SELECT *
FROM potrosaci
WHERE korisnicko_ime LIKE "%na";

SELECT * FROM potrosaci WHERE korisnicko_ime LIKE "J%na";

-- "%" ne mora da sadrzi nesto

SELECT * FROM potrosaci WHERE plata BETWEEN 30000 AND 80000
SELECT * FROM potrosaci WHERE drzava IN ("Srbija", "Crna Gora", "Madjarska");
SELECT * FROM potrosaci WHERE zemlja LIKE "S%";

SELECT * FROM zadaci WHERE id IN (1, 4, 8, 12);
SELECT * FROM zadaci WHERE datum_pocetka > "2019-01-01";
SELECT * FROM zadaci WHERE `status` != 1;


--zadaci 
SELECT * FROM potrosaci WHERE drzava LIKE "Srbija" AND plata > 60000;
SELECT * FROM potrosaci WHERE ime LIKE "S$" OR godine < 30;
SELECT * FROM zadaci WHERE `status` <> 0 AND prioritet = 1;
SELECT * FROM zadaci WHERE datum_pocetka <= "2019-01-01";

--redosled
select * FROM potrosaci ORDER BY ime_prezime ASC
SELECT * FROM `potrosaci` ORDER BY ime_prezime DESC
SELECT * FROM `potrosaci` ORDER BY plata DESC, ime_prezime; (sa najvecom platom prvo, ako neko ima istu platu, primenjuje se drugi kriterijum)
SELECT * FROM potrosaci WHERE plata > 3*118 ORDER BY plata DESC, ime_prezime ASC LIMIT 3;

--Nova baza: Videoteka
CREATE DATABASE `videoteka` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;
USE `videoteka`;
CREATE TABLE IF NOT EXISTS `filmovi` 
(
    `id` INT UNSIGNED AUTO_INCREMENT, 
    -- UNSIGNED: nema plus/minus = samo pozitivni brojevi; AUTO_INCREMENT: automatski popunjava kolonu sledecim slobodnim brojem, samo jedna kolona moze da ima AUTO_INCREMENT, i ona mora da ima primarni kljuc;
    `naslov` VARCHAR(255) NOT NULL,
    `reziser` VARCHAR(255) NOT NULL,
    `god_izdavanja` YEAR NOT NULL,
    `zanr` VARCHAR(255) NOT NULL,
    `ocena` DECIMAL(4,2),
    PRIMARY KEY (id)
);

INSERT INTO filmovi (naslov, reziser, god_izdavanja, zanr, ocena)
VALUES ('Umri Muški', "John McTiernam", 1988, "akcija", 8.2),
       ("Paklena pomorandža", "Stanley Kubrick", 1964, "drama", 8.9),
       ("Spy Hard", "Rick Friedberg", 1996, "komedija", 5.4),
       ("Umri muški 2", "John McTiernam", 1990, "akcija", 7.9),
       ("Underground", "Emir Kusturica", 1995, "drama", 8.2);

-- selektovati sve filmove koji su tragedija, komedija ili drama    
SELECT * FROM `filmovi` WHERE zanr IN ("tragedija", "komedija", "drama")

--selektovati sve filmove kojima je ocena izmedju 7 i 10;
SELECT * FROM `filmovi` WHERE ocena BETWEEN 7 AND 10;

--selektovati bez ponavljanja rezisere koji su rezirali filmove izdate pre 1990. i poredjeati ih abecednim redom.
SELECT DISTINCT reziser 
FROM `filmovi`
WHERE god_izdavanja<1990;
ORDER BY reziser ASC;

--selektovati sve filmove tako da im zanr nije komedija;

SELECT * FROM filmovi WHERE zanr != "komedija"
ORDER BY naslov DESC;

--prikazati sve informacije o najbolje rangiranom filmu;
SELECT * FROM filmovi
ORDER BY ocena DESC
LIMIT 1;

--selektovati najbolje rangiranu dramu;
SELECT * FROM filmovi 
WHERE zanr LIKE "drama"
ORDER BY ocena DESC
LIMIT 1;



