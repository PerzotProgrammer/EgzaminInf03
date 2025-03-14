-- kw1
SELECT cena, pojemnosc FROM farby WHERE kolor LIKE "Czerwony";

-- kw2
SELECT kolor, cena * pojemnosc AS "cena jednostkowa" FROM farby;

-- kw3
SELECT kolor, liczba_puszek FROM farby INNER JOIN malowanie ON farby.id_farby = malowanie.id_farby WHERE id_pomieszczenia = 3;

-- kw4
CREATE VIEW pomieszczenie1 AS SELECT id_sciany, id_farby, liczba_puszek FROM malowanie WHERE id_pomieszczenia = 1;
