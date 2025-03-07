-- kw1
INSERT INTO zawody_wedkarskie(Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES (2, 4, DATE("2021-09-28"), "Andrzej Nowak")

-- kw2
SELECT id, data_zawodow FROM zawody_wedkarskie WHERE sedzia LIKE "Krzysztof Dobrowolski"

-- kw3
SELECT imie, nazwisko, punkty FROM karty_wedkarskie INNER JOIN zawody_wedkarskie ON Karty_wedkarskie_id = zawody_wedkarskie.Karty_wedkarskie_id WHERE zawody_wedkarskie.id = 4

-- kw4
UPDATE karty_wedkarskie SET punkty = punkty + 2 WHERE id = 1