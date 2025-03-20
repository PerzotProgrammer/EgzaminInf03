-- kw1
SELECT nazwa FROM wycieczki WHERE poczatek LIKE "Muszyna" OR poczatek LIKE "Wieliczka";

-- kw2
SELECT nazwa, opis, poczatek, zrodlo FROM wycieczki INNER JOIN zdjecia ON wycieczki.zdjecia_id = zdjecia.id;

-- kw3
SELECT COUNT(id) FROM wycieczki;

-- kw4
ALTER TABLE wycieczki ADD COLUMN ocena int; 