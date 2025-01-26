-- kw1
SELECT nazwa, cena FROM towary LIMIT 4

-- kw2
SELECT cena FROM towary WHERE nazwa LIKE "Ekierka"

-- kw3
UPDATE dostawcy SET nazwa = "Artykuly szkolne" WHERE id = 2 

-- kw4
SELECT promocja, COUNT(id) AS 'podsumowanie' FROM towary GROUP BY promocja