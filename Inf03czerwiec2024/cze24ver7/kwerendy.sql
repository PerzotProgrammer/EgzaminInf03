-- kw1
UPDATE wagi SET dzien = CURRENT_DATE, czas = CURRENT_TIME WHERE lokalizacje_id BETWEEN 2 AND 4;

-- kw2
SELECT ulica FROM lokalizacje;

-- kw3
INSERT INTO wagi(lokalizacje_id, waga, rejestracja, dzien, czas) VALUES (5, FLOOR(RAND()* 10 + 1), 'DW12345', CURRENT_DATE, CURRENT_TIME);

-- kw4
SELECT rejestracja, ulica, waga, dzien, czas FROM wagi JOIN lokalizacje ON wagi.lokalizacje_id = lokalizacje.id WHERE waga > 5;