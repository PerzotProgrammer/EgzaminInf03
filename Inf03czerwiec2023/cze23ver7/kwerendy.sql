-- zad1
insert into czytelnicy(imie, nazwisko, kod)
values ('Ewelina', 'Romanowska', '56677');


-- zad2
select imie, nazwisko
from czytelnicy
order by nazwisko;

-- zad3
select tytul
from ksiazki
         natural join autorzy
where nazwisko like 'Sienkiewicz';

-- zad4
select nazwisko, count(ksiazki.id) as "ile_tytulow"
from autorzy,
     ksiazki
where autorzy.id = ksiazki.id_autor
group by nazwisko 