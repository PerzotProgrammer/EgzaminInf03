-- kw1
SELECT nazwa FROM marki;

-- kw2
SELECT model, rocznik, przebieg, paliwo, cena, zdjecie FROM samochody WHERE id = 10;

-- kw3
SELECT nazwa, model, rocznik, cena, zdjecie FROM marki INNER JOIN samochody ON marki.id = samochody.marki_id WHERE wyrozniony = 1 LIMIT 4;

-- kw4
SELECT model, cena, zdjecie FROM samochody INNER JOIN marki ON samochody.marki_id = marki.id WHERE nazwa LIKE "Audi";