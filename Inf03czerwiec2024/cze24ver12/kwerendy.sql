-- kw1
SELECT imie, pensja FROM pracownicy WHERE staz < 5

-- kw2
SELECT AVG(pensja), nazwa FROM pracownicy INNER JOIN stanowiska ON pracownicy.stanowiska_id = stanowiska.id GROUP BY nazwa

-- kw3
SELECT imie, nazwisko, pensja FROM pracownicy WHERE pensja = (SELECT pensja FROM pracownicy ORDER BY pensja DESC LIMIT 1)

-- kw4
UPDATE pracownicy SET staz = staz + 1