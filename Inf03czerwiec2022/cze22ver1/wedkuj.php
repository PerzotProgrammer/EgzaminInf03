<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div id="banner">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <div id="left1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <?php
                $con = new mysqli("localhost", "root", "", "wedkowanie");
                $query = "SELECT nazwa, akwen, wojewodztwo FROM ryby INNER JOIN lowisko ON ryby.id = lowisko.Ryby_id WHERE rodzaj = 3";
                
                $result = $con->query($query);
                while($row = $result->fetch_array()) {
                    echo "<li>{$row[0]} pływa w rzece {$row[1]}, {$row[2]}</li>";
                }
            ?>
        </ol>
    </div>
    <div id="right">
        <img src="ryba1.jpg" alt="Sum">
        <a href="./kwerendy.sql">Pobierz kwerendy</a> <!---W arkuszu jest podane rozszerzenie .txt--->
    </div>
    <div id="left2">
        <table>
            <h3>Ryby drapieżne naszych wód</h3>
            <tr><th>L.p.</th><th>Gatunek</th><th>Występowanie</th></tr>
            <?php
                $query = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1";
                
                $result = $con->query($query);
                while($row = $result->fetch_array()) {
                    echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td></tr>";
                }

                $con->close();
            ?>
        </table>
    </div>
    <div id="footer">
        <p>Stronę wykonał: XYZ</p>
    </div>
</body>
</html>