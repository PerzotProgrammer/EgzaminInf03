-- zad1
select distinct wpis
from zadania
where day(dataZadania) between 1 and 7
  and month(dataZadania) like 7
  and year(dataZadania) like 2020
  and wpis not like '';

-- zad2
select dataZadania, wpis
from zadania
where month(dataZadania) = 7;

-- zad3
select miesiac, wpis
from zadania
where wpis like 'S%';

-- zad4
update zadania
set wpis = 'Wycieczka nad morze'
where dataZadania like date('2020-07-18');