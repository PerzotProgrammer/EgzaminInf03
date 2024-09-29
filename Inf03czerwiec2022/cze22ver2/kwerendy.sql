-- zad 1
SELECT marka, rocznik
FROM samochody
WHERE kolor LIKE 'niebieski';

-- zad 2
SELECT COUNT(stan)
FROM samochody
WHERE stan LIKE 'bardzo dobry'
  AND (marka LIKE 'Toyota' OR marka LIKE 'Opel');

-- zad 3
UPDATE samochody SET stan = 'dobry'
WHERE rocznik < 2004;

-- zad 4
CREATE USER jan@'localhost' IDENTIFIED BY 'janKowalski1@';

-- zad 5
GRANT SELECT, INSERT, UPDATE ON samochody TO jan@'localhost';