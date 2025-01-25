<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div id="banner">
        <h1>BIURO TURYSTYCZNE</h1>
    </div>
    <div id="data">
        <h3>Wycieczki, na które są wolne miejsca</h3>
        <ul>
            <?php
                $con = new mysqli("localhost", "root", "", "biuro");
                $query = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1;";
                
                $result = $con->query($query);
                while($row = $result->fetch_array()){
                    echo "<li>{$row[0]}. dnia {$row[1]} jedziemy do {$row[2]}, cena: {$row[3]}</li>";
                }
            ?>
        </ul>
    </div>
    <div id="wrap">
        <div id="left">
            <h2>Bestselery</h2>
            <table>
                <tr><td>Wenecja</td><td>kwiecień</td></tr>
                <tr><td>Londyn</td><td>lipiec</td></tr>
                <tr><td>Rzym</td><td>wrzesień</td></tr>
            </table>
        </div>
        <div id="center">
            <h2>Nasze zdjęcia</h2>
            <?php
                $query = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC";
                
                $result = $con->query($query);
                while($row = $result->fetch_array()){
                    echo "<img src='{$row[0]}' alt='{$row[1]}'>";
                }

                $con->close();
            ?>
        </div>
        <div id="right">
            <h2>Skontaktuj się</h2>
            <a href="mailto:turysta@wycieczki.pl">napisz do nas</a>
            <p>telefon: 111222333</p>
        </div>
    </div>
    <div id="footer">
        <p>Stronę wykonał: XYZ</p>
    </div>
</body>
</html>