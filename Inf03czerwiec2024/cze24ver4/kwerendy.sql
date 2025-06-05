-- kw1
SELECT tytul, plik FROM zdjecia WHERE polubienia >= 100;

-- kw2
SELECT plik, tytul, polubienia, imie, nazwisko FROM zdjecia INNER JOIN autorzy ON autorzy.id = zdjecia.autorzy_id ORDER BY nazwisko ASC;

-- kw3
SELECT imie, COUNT(zdjecia.id) FROM autorzy INNER JOIN zdjecia ON autorzy.id = zdjecia.autorzy_id GROUP BY imie;

-- kw4
ALTER TABLE zdjecia ADD rozmiarPliku INTEGER;