-- kw1
SELECT miejsce, liczbaDni FROM wycieczki WHERE cena < 1000

-- kw2
SELECT liczbaDni, AVG(cena) AS "sredniaCena" FROM wycieczki GROUP BY liczbaDni

-- kw3
SELECT miejsce, nazwa FROM wycieczki INNER JOIN zdjecia ON wycieczki.id = zdjecia.Wycieczki_id WHERE cena > 500

-- kw4
CREATE USER 'Ewa'@'localhost' IDENTIFIED BY "Ewa!Ewa"