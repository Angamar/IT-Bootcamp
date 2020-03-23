CREATE TABLE firma.proizvodi
(

proizvod_id INT PRIMARY KEY AUTO_INCREMENT ,
proizvod_kod CHAR(5) NOT NULL DEFAULT '',
ime VARCHAR(30) NOT NULL DEFAULT '',
kolicina SMALLINT NOT NULL,
cena DECIMAL(11,2)
);

ALTER TABLE proizvodi 
CHANGE kolicina kolicina SMALLINT(6) NOT NULL DEFAULT '0',
CHANGE cena cena DECIMAL(7,2) NOT NULL DEFAULT '0',
ADD opis TEXT;

INSERT INTO proizvodi (proizvod_kod, ime, kolicina, cena, opis) VALUES 
(111, 'Tost sa sunkom', 1, 90, 'Tost sa sunkom, kackavaljem i kecapom'),
(112, 'Tost sa pecenicom', 1, 100, 'Tost sa pecenicom, kackavaljem i kecapom'),
(113, 'Tost sa kulenom', 1, 120, 'Tost sa kulenom, kackavaljem i kecapom'),
(114, 'Pljeskavica (mala)', 1, 120, 'Mala pljeskavica sa lepinjom i prilozima po izboru'),
(115, 'Pljeskavica (velika)', 1, 150, 'Velika pljeskavica sa lepinjom i prilozima po izboru');

SELECT DISTINCT ime FROM proizvodi ORDER BY ime DESC;
SELECT * FROM proizvodi WHERE ime LIKE 'L%' ORDER BY cena DESC LIMIT 3;