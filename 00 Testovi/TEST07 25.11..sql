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
(3,'Wodden shelf', 304.99),
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



