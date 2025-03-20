-- kw1
SELECT nazwa, cena FROM uslugi WHERE cena >= 50;

-- kw2
SELECT AVG(cena), COUNT(id) FROM uslugi WHERE rodzaj = 1;

-- kw3
CREATE USER kosmetyczka@'localhost' IDENTIFIED BY "Kosmet34";

-- kw4
GRANT SELECT, UPDATE ON salon.uslugi TO kosmetyczka;