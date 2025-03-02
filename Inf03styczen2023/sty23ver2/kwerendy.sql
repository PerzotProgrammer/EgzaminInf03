-- kw1
SELECT * FROM pokoje

-- kw2
SELECT id_pok, sezon FROM rezerwacje WHERE liczba_dn > 7

-- kw3
SELECT SUM(liczba_dn) FROM rezerwacje WHERE sezon like "zima" GROUP BY sezon

-- kw4
UPDATE rezerwacje SET liczba_dn = 4 WHERE liczba_dn < 4

-- kw5
CREATE USER najemca IDENTIFIED BY 'n@JEM1@!'