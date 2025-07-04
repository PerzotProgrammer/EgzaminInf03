-- kw1
SELECT pensja, COUNT(*) FROM pracownicy GROUP BY pensja ORDER BY pensja DESC;

-- kw2
SELECT imie, nazwisko, nazwa FROM pracownicy INNER JOIN stanowiska ON pracownicy.stanowiska_id = stanowiska.id WHERE staz > 10;

-- kw3
SELECT nazwisko, pensja FROM pracownicy WHERE staz BETWEEN 10 AND 20;

-- kw4
ALTER TABLE stanowiska ADD COLUMN minPensja INTEGER;