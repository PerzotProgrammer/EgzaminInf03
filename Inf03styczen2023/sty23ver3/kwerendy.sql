-- kw1
SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto LIKE "Malbork";

-- kw2
SELECT id_kwiaciarni, COUNT(id_zam) FROM zamowienia GROUP BY id_kwiaciarni;

-- kw3
SELECT kwiaciarnie.nazwa, kwiaciarnie.miasto, zamowienia.kwiaty 
FROM kwiaciarnie INNER JOIN zamowienia ON kwiaciarnie.id_kwiaciarni = zamowienia.id_kwiaciarni 
WHERE zamowienia.data LIKE date('2017-01-07');

-- kw4
CREATE TABLE klienci (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    imie VARCHAR(15),
    nazwisko VARCHAR(15),
    rabat INT
);