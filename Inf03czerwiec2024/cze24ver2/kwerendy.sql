-- kw1
INSERT INTO logowanie (id, nick, haslo) VALUES (
	(SELECT id FROM uczestnicy WHERE imie LIKE "Jeremi" AND nazwisko LIKE "Kowalski"),
    "Jeremi",
    "Jer123"
)

-- kw2
SELECT FLOOR(AVG(rokUr)) AS "Średni rok urodzenia" FROM uczestnicy

-- kw3
SELECT imie, nazwisko, nick, haslo FROM logowanie INNER JOIN uczestnicy ON logowanie.id = uczestnicy.logowanie_id WHERE imie LIKE "J%"

-- kw4
CREATE USER uczestnik@'localhost' IDENTIFIED BY "Ucz123&"

-- kw5
GRANT SELECT, INSERT ON uczestnicy TO uczestnik@'localhost'