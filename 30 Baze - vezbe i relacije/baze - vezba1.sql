SELECT ime_prezime FROM potrosaci WHERE ime_prezime LIKE "Jovana%" OR ime_prezime LIKE "Katarina%";
SELECT adresa, ime_prezime FROM potrosaci WHERE drzava LIKE "Srbija" AND (adresa LIKE 'Ulica%' OR adresa LIKE 'Bulevar%') ORDER BY ime_prezime ASC;
UPDATE potrosaci SET adresa = 'Ulica Krste Brankovica 6' WHERE potrosaci.id = 112; 
UPDATE potrosaci SET adresa = 'Ulica Todora Milovanovica 49' WHERE potrosaci.id = 111; 
UPDATE potrosaci SET adresa = 'Ulica Zelengorska' WHERE potrosaci.id = 113; 
UPDATE potrosaci SET adresa = 'Naselje Ratko Jovic 29' WHERE potrosaci.id = 114; 
UPDATE potrosaci SET adresa = 'Bulevar Bla Bla 6' WHERE potrosaci.id = 115; 
SELECT * FROM potrosaci WHERE drzava IN ('Nemacka', 'Crna Gora', 'Bosna i Hercegovina') ORDER BY drzava ASC, ime_prezime DESC;

ALTER TABLE potrosaci ADD grad VARCHAR(20) AFTER ime_prezime; -- ako je na prvom mestu FIRST;
UPDATE potrosaci SET grad = 'Niš' WHERE drzava LIKE 'Srbija';
UPDATE potrosaci SET grad = 'Podgorica' WHERE potrosaci.id = 113; 
UPDATE potrosaci SET grad = 'Novi Sad' WHERE potrosaci.id = 114; 
UPDATE potrosaci SET grad = 'Banja Luka' WHERE potrosaci.id = 115; 

SELECT * FROM potrosaci WHERE drzava LIKE "Srbija" AND grad NOT LIKE "Beograd" AND grad NOT LIKE "Novi Sad";
SELECT MAX(plata) FROM potrosaci WHERE drzava LIKE "Srbija";
SELECT AVG(plata) FROM potrosaci WHERE drzava LIKE "Srbija" AND grad NOT LIKE "Novi Sad";
SELECT *, MIN(plata) FROM potrosaci WHERE ime_prezime LIKE "Jovana%";
SELECT SUM(plata) FROM potrosaci WHERE godine > 50;

SELECT * FROM potrosaci WHERE drzava LIKE 'Srbija%' 
AND plata = (SELECT MAX(plata) FROM potrosaci WHERE drzava LIKE 'Srbija%');

--odrediti sve potrosace iz Amerike a nisu iz Njujorka koji imaju natprosecnu platu

SELECT * FROM potrosaci WHERE drzava ='Amerika'
AND grad NOT LIKE 'New York'
AND plata > (SELECT AVG (plata) AS prosecna_plata FROM potrosaci WHERE drzava = 'Amerika' AND godine>50)
ORDER BY ime_prezime;