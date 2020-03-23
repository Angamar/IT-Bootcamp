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


--povezivanje tabela
SELECT kompozicije.naziv, periodi.naziv
FROM kompozicije
INNER JOIN periodi
ON kompozicije.id_period = periodi.id
WHERE periodi.naziv LIKE "Barok";

SELECT kompozicije.naziv, kompozitori.ime_prezime -- sta selektujemo?
FROM kompozicije -- odakle krecemo? krece se sa jednog kraja
INNER JOIN komponuje -- sa kojom tabelom se povezuje
ON kompozicije.id = komponuje.id_kompozicije -- preko kojih kolona su povezani
INNER JOIN kompozitori -- sa kojom se dalje tabelom povezuje 
ON komponuje.id_kompozitora = kompozitori.id;

--popunjavanje tabele svira
INSERT INTO svira(id_kompozicije, id_instrumenta)
VALUES
(1,2),
(1,3),
(1,10),
(2,2),
(3,1);

SELECT kompozicije.naziv, instrumenti.naziv
FROM kompozicije
INNER JOIN svira ON kompozicije.id = svira.id_kompozicije
INNER JOIN instrumenti ON svira.id_instrumenta = instrumenti.id;


--kompozicije koje pripadaju ili baroku ili romantizmu
SELECT kompozicije.naziv, periodi.naziv
FROM kompozicije
INNER JOIN periodi ON kompozicije.id_period = periodi.id
WHERE periodi.naziv IN ('Barok', 'Romantizam');

--naziv, trajanje i period kompozicije:
SELECT kompozicije.naziv, kompozicije.trajanje, periodi.naziv
FROM kompozicije
INNER JOIN periodi ON kompozicije.id_period = periodi.id;

--kompozicije koje je komponovao betoven
SELECT kompozicije.naziv, kompozitori.ime_prezime
FROM kompozicije
INNER JOIN komponuje ON kompozicije.id = komponuje.id_kompozicije
INNER JOIN kompozitori ON komponuje.id_kompozitora = kompozitori.id
WHERE kompozitori.ime_prezime LIKE "%betoven%";

SELECT ke.naziv, ki.ime_prezime -- alias za kolonu se stavlja ovde
FROM kompozicije AS ke --alias za tabelu se stavlja na FROM i INNER JOIN
INNER JOIN komponuje AS komp ON ke.id = komp.id_kompozicije
INNER JOIN kompozitori AS  ki ON komp.id_kompozitora = ki.id
WHERE ki.ime_prezime LIKE "%betoven%";

--bez ponavljanja kompozitori koji su nesto komponovali;
SELECT DISTINCT kompozitori.ime_prezime
FROM kompozitori
INNER JOIN komponuje ON kompozitori.id = komponuje.id_kompozitora;

SELECT kompozicije.naziv, kompozicije.trajanje, kompozitori.ime_prezime, periodi.naziv
FROM periodi
INNER JOIN kompozicije ON periodi.id = kompozicije.id_period
INNER JOIN komponuje ON kompozicije.id = komponuje.id_kompozicije
INNER JOIN kompozitori ON komponuje.id_kompozitora = kompozitori.id
ORDER BY kompozicije.trajanje DESC
LIMIT 1;

SELECT kompozitori.ime_prezime, kompozicije.naziv 
FROM kompozitori
INNER JOIN komponuje ON kompozitori.id = komponuje.id_kompozitora
INNER JOIN kompozicije ON kompozicije.id = komponuje.id_kompozicije
WHERE kompozicije.trajanje BETWEEN 5 AND 25
ORDER BY trajanje DESC;

SELECT DISTINCT instrumenti.naziv, periodi.naziv
FROM instrumenti
INNER JOIN svira ON svira.id_instrumenta = instrumenti.Id
INNER JOIN kompozicije ON kompozicije.id = svira.id_kompozicije
INNER JOIN periodi ON periodi.id = kompozicije.id_period
WHERE periodi.naziv LIKE "Klasicizam";

--prebrojati koliko ima muzickih instrumenata koji sviraju u betovenovim kompozicijama

SELECT DISTINCT COUNT(instrumenti.naziv) AS "Broj instrumenata u Betovenovim kompozicijama"
FROM instrumenti
INNER JOIN svira ON svira.id_instrumenta = instrumenti.Id
INNER JOIN kompozicije ON kompozicije.id = svira.id_kompozicije
INNER JOIN komponuje ON komponuje.id_kompozicije = kompozicije.id
INNER JOIN kompozitori ON kompozitori.id = komponuje.id_kompozitora
WHERE kompozitori.ime_prezime LIKE '%Betoven%'

--prebrojati koliko razlicitih instrumenata svira u svim kompozicijama
SELECT COUNT(DISTINCT id_instrumenta) FROM svira;



--TEST 07

CREATE DATABASE store;

CREATE TABLE categories
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	category_name VARCHAR(170) NOT NULL,
	description CHAR (200)
);

CREATE TABLE products
(
	id INT PRIMARY KEY,
	product_name VARCHAR(200) NOT NULL,
	price DECIMAL (10,2) DEFAULT 0
);

CREATE TABLE product_categories
(
	id INT ,
	id_product INT,
	id_category INT,
    PRIMARY KEY (id),
    FOREIGN KEY (id_product) REFERENCES products(id),
    FOREIGN KEY (id_category) REFERENCES categories(id)
);

CREATE TABLE orders
(
	id INT PRIMARY KEY,
	order_date DATE
);

CREATE TABLE orders_details
(
	id INT,
	id_order INT,
    id_product INT,
    quantity INT UNSIGNED,
    PRIMARY KEY (id),
    FOREIGN KEY (id_order) REFERENCES orders(id),
    FOREIGN KEY (id_product) REFERENCES products(id)
);

ALTER TABLE categories 
CHANGE description 
description TEXT;

INSERT INTO categories (category_name, description)
VALUES 
('Living room', 'Cozy furniture for your living room'),
('Bedroom', 'Beds, Pillows, Blankets etc.'),
('Garden', 'Garden gnomes, fountains and so much more!');

INSERT INTO products (id, product_name, price)
VALUES 
(1, 'Coffee table', 199.99),
(2,'Lamp',119.99),
(3,'Wodden shelf', 305.99),
(4,'Carpet', 649.99),
(5, 'Blue Sofa', 569.99),
(6, 'Some green plant', 29.99)

INSERT INTO orders (id, order_date)
VALUES 
(1, '2018-12-30'),
(2,	'2019-11-16'),
(3,	'2019-11-17'),
(4,	'2019-11-20')


INSERT INTO product_categories (id, id_product, id_category)
VALUES 
(1, 1, 1),
(2,	2, 1),
(3,	2, 2),
(4,	3, 1),
(5,	3, 2),
(6,	4, 1),
(7,	4, 2),
(8,	5, 1),
(9,	6, 3)

INSERT INTO orders_details (id, id_order, id_product, quantity)
VALUES 
(1, 1, 1, 2),
(2,	2, 1, 1),
(3,	3, 4, 1),
(4,	4, 5, 1)

--Dodatni proizvod "Garden gnome" (radi testiranja)
INSERT INTO products (id, product_name, price) VALUES (7, 'Garden gnome', 779.99);
INSERT INTO `product_categories` (`id`, `id_product`, `id_category`) VALUES ('10', '7', '3');
INSERT INTO `orders` (`id`, `order_date`) VALUES ('5', '2019-09-20');
INSERT INTO `orders_details` (`id`, `id_order`, `id_product`, `quantity`) VALUES ('5', '5', '7', '11');

--Odrediti sve kategorije proizvoda sortirane po nazivu kategorije.
SELECT *
FROM store.categories
ORDER BY categories.category_name ASC;

--Odrediti broj narudžbina koje su izvršene u 2019. godini.
SELECT count(orders.id) AS `2019_orders` FROM orders
WHERE year(order_date) >2018;

--Odrediti sve proizvode čija je cena veća od prosečne cene svih proizvoda.
SELECT * FROM products 
WHERE products.price > (SELECT AVG (products.price) FROM products);

--Odrediti sve kategorije sortirane po nazivu u opadajućem redosledu, 
--koje imaju proizvod skuplji od 500.

SELECT DISTINCT categories.category_name
FROM categories
INNER JOIN product_categories ON product_categories.id_category = categories.id
INNER JOIN products ON products.id = product_categories.id_product
WHERE products.price>500
ORDER BY categories.category_name DESC;

--Odrediti najskuplji proizvod iz kategorije 'Garden'.

SELECT products.product_name, categories.category_name, products.price
FROM products
INNER JOIN product_categories ON product_categories.id_product = products.id
INNER JOIN categories ON categories.id = product_categories.id_category
WHERE categories.category_name like 'Garden'
ORDER BY products.price DESC LIMIT 1;

--Odrediti sve datume (bez ponavljanja) kada je neki proizvod u jednoj kupovini kupljen
--u kolicini vecoj od 10, a pripada kategoriji koja počinje na slovo “G”.
SELECT DISTINCT orders.order_date 
FROM orders
INNER JOIN orders_details ON orders_details.id_order = orders.id
INNER JOIN products ON products.id = orders_details.id_product
INNER JOIN product_categories ON product_categories.id_product = products.id
INNER JOIN categories ON categories.id = product_categories.id_category
WHERE orders_details.quantity > 10 AND categories.category_name LIKE 'G%';



