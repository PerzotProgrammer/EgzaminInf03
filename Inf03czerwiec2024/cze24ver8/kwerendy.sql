-- kw1
SELECT imie, nazwisko FROM osoby WHERE YEAR(dataUr) > 2000;

-- kw2
SELECT DISTINCT miasto FROM adresy;

-- kw3
SELECT imie, nazwisko, numer FROM osoby INNER JOIN telefony ON osoby.id = telefony.Osoby_id;

-- kw4
ALTER TABLE adresy ADD COLUMN numerMieszkania INT AFTER numer;