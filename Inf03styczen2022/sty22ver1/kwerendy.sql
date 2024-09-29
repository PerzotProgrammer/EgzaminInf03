-- screenshotów sobie oszczędziłem :)

-- zad1
INSERT INTO rezerwacje(nr_stolika, data_rez, telefon) VALUES (1,"2017-07-04")

--zad2
SELECT nazwa, cena FROM dania WHERE typ = 2

--zad3
SELECT nazwa, cena FROM dania WHERE typ = 3 AND cena < 15

--zad4
UPDATE pracownicy
SET stanowisko = 4
WHERE stanowisko = 3

--chyba git