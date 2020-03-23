CREATE TABLE `firma`.`studenti` ( `ime` VARCHAR(50) NOT NULL , `prezime` VARCHAR(80) NOT NULL , `godine` INT NOT NULL , `prosecna_ocena` DECIMAL(3,2) NOT NULL ) ENGINE = MyISAM;

INSERT INTO `studenti` (`ime`, `prezime`, `godine`, `prosecna_ocena`) 
VALUES ('Aleksa', 'Stojanović', '24', '9.2'), ('Slađana', 'Živković', '24', '6.45'), ('Miloš', 'Ilić', '20', '8.77');