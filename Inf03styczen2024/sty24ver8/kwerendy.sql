-- kw1
SELECT imie, nazwisko, stanowisko FROM kadra WHERE stanowisko LIKE "fryzjer" OR stanowisko LIKE "stylista";

-- kw2
SELECT COUNT(id), MAX(cena) FROM uslugi;

-- kw3
SELECT nazwa, imie FROM uslugi INNER JOIN kadra ON uslugi.kadra_id = kadra.id WHERE rodzaj = 2 OR rodzaj = 3;

-- kw4
ALTER TABLE uslugi ADD opinia VARCHAR(255);