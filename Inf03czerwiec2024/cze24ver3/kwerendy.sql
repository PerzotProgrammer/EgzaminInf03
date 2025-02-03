-- kw1
SELECT nazwa, rzeka, stanAlarmowy FROM wodowskazy

-- kw2
SELECT nazwa, rzeka, stanOstrzegawczy, stanAlarmowy, stanWody FROM wodowskazy INNER JOIN pomiary ON wodowskazy.id = pomiary.wodowskazy_id WHERE dataPomiaru = '2022-05-05'

-- kw3
SELECT nazwa, rzeka, stanOstrzegawczy, stanAlarmowy, stanWody FROM wodowskazy INNER JOIN pomiary ON wodowskazy.id = pomiary.wodowskazy_id WHERE dataPomiaru = '2022-05-05' AND stanWody > stanOstrzegawczy

-- kw4
SELECT dataPomiaru, AVG(stanWody) FROM pomiary GROUP BY dataPomiaru