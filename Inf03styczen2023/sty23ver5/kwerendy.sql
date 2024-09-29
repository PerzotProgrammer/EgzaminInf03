-- zad1
select dataZadania, wpis
from zadania
where month(dataZadania) = 8;

-- zad2
select miesiac, rok
from zadania
where month(dataZadania) = 8
  and day(dataZadania) = 7;

-- zad3
select miesiac, count(id) as ile_razy_weterynarz
from zadania
where wpis like 'Weterynarz%'
group by miesiac;

-- zad4
update zadania
set wpis='Wycieczka: Zalew Mietkowski'
where month(dataZadania) = 8
  and day(dataZadania) = 9;