-- zad1
select nazwaPliku, podpis
from zdjecia
order by podpis;

-- zad2
select cel, dataWyjazdu
from wycieczki
where dostepna = 0;


-- zad3
select cel, cena, podpis
from wycieczki
         inner join zdjecia on wycieczki.zdjecia_id = zdjecia.id
where cena > 1300;

-- zad4
drop table uzytkownik;
