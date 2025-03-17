-- kw1
SELECT imie, nazwisko FROM autorzy ORDER BY nazwisko ASC;

-- kw2
INSERT INTO czytelnicy(imie, nazwisko, kod) VALUES ('Ewa', 'Kowalska', 145421);

-- kw3
SELECT tytul FROM ksiazki WHERE id_kategoria = 2;

-- kw4
SELECT tytul FROM ksiazki INNER JOIN wypozyczenia ON ksiazki.id = wypozyczenia.id_ksiazka INNER JOIN czytelnicy ON wypozyczenia.id_czytelnik = czytelnicy.id WHERE czytelnicy.id = 2;