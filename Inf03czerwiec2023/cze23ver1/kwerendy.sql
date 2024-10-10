-- kw1
select nazwa
from towary
where promocja = 1;

-- kw2
select cena
from towary
where nazwa like 'Markery 4 szt.';

-- kw3
select dostawcy.id, dostawcy.nazwa, count(towary.id) as "liczba_towarow"
from dostawcy
         inner join towary on dostawcy.id = towary.idDostawcy
group by dostawcy.id;

-- kw4
alter table dostawcy
    add informacje varchar(255);