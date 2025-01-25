-- kw1
SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1;

-- kw2
SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC

-- kw3
SELECT cel, cena, podpis FROM wycieczki INNER JOIN zdjecia ON wycieczki.zdjecia_id = zdjecia.id WHERE cena > 1200

-- kw4
ALTER TABLE wycieczki ADD COLUMN liczbaDni INT AFTER dataWyjazdu