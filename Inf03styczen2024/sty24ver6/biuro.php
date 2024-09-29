<!doctype html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Poznaj Europę</title>
    <link rel="stylesheet" href="styl9.css">
</head>
<body>
<div id="banner">
    <h1>BIURO PODRÓŻY</h1>
</div>
<div id="wrapper">
    <div id="left">
        <h2>Promocje</h2>
        <table>
            <tr>
                <td>Warszawa</td>
                <td>od 600 zł</td>
            </tr>
            <tr>
                <td>Wenecja</td>
                <td>od 1200 zł</td>
            </tr>
            <tr>
                <td>Paryż</td>
                <td>od 1200zł</td>
            </tr>
        </table>
    </div>
    <div id="center">
        <h2>W tym roku jedziemy do...</h2>
        <?php
            $con = mysqli_connect("localhost", "root", "", "podroze");
            $query = "select nazwaPliku, podpis from zdjecia order by podpis;";
            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo "<img src='$row[0]' alt='$row[1]' title='$row[1]'>";
            }
        ?>
    </div>
    <div id="right">
        <h2>Kontakt</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 444555666</p>
    </div>
</div>
<div id="data">
    <h3>W poprzednich latach byliśmy w</h3>
    <ol>
        <?php
            $query = "select cel, dataWyjazdu from wycieczki where dostepna = 0;";
            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo "<li>Dnia $row[1] pojechaliśmy do $row[0]</li>";
            }
            mysqli_close($con);
        ?>
    </ol>
</div>
<div id="footer">
    <p>Stronę wykonał: XYZ</p>
</div>
</body>
</html>