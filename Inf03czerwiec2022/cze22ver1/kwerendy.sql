-- kw1
SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1

-- kw2
SELECT ryby_id, wymiar_ochronny FROM okres_ochronny WHERE wymiar_ochronny < 30

-- kw3
SELECT nazwa, akwen, wojewodztwo FROM ryby INNER JOIN lowisko ON ryby.id = lowisko.Ryby_id WHERE rodzaj = 3

-- kw4
ALTER TABLE ryby ADD COLUMN dobowy_limit int(255)