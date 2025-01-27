-- kw1
SELECT imie, nazwisko, koszt FROM uczestnicy WHERE zaplacono = 0

-- kw2
SELECT AVG(koszt) AS "Średni koszt", SUM(koszt) AS "Całkowity koszt", COUNT(id) AS "Liczba uczestników" FROM uczestnicy

-- kw3
SELECT nazwa, nazwisko, email FROM wyklady INNER JOIN uczestnicy ON uczestnicy.wyklady_id = wyklady.id WHERE zaplacono = 1

-- kw4
ALTER TABLE uczestnicy DROP COLUMN haslo