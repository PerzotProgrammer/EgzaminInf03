<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Ważenie samochodów ciężarowych</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header id="banner">
        <section id="bLeft">
            <h1>Ważenie pojazdów we Wrocławiu</h1>
        </section>
        <section id="bRight">
            <img src="obraz1.png" alt="waga">
        </section>
    </header>
    <main id="main">
        <section id="left">
            <h2>Lokalizacje wag</h2>
            <ol>
                <?php
                $con = new mysqli("localhost", "root", "", "wazenietirow");
                $query = "SELECT ulica FROM lokalizacje;";

                $result = $con->query($query);

                while($row = $result->fetch_array()) {
                    echo "<li>$row[0]</li>";
                }
                ?>
            </ol>
            <h2>Kontakt</h2>
            <a href="mailto:wazenie@wroclaw.pl">napisz</a>
        </section>
        <section id="center">
            <h2>Alerty</h2>
            <table>
                <tr>
                    <th>rejestracja</th>
                    <th>ulica</th>
                    <th>waga</th>
                    <th>dzień</th>
                    <th>czas</th>
                </tr>
                <?php
                $query = "SELECT rejestracja, ulica, waga, dzien, czas FROM wagi JOIN lokalizacje ON wagi.lokalizacje_id = lokalizacje.id WHERE waga > 5;";
                $result = $con->query($query);

                while($row = $result->fetch_array()) {
                    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
                }
                ?>
            </table>
            <?php
            $query = "INSERT INTO wagi(lokalizacje_id, waga, rejestracja, dzien, czas) VALUES (5, FLOOR(RAND()* 10 + 1), 'DW12345', CURRENT_DATE, CURRENT_TIME);";
            $con->query($query);
            $con->close();
            header("refresh: 10;");
            ?>
        </section>
        <section id="right">
            <img src="obraz2.jpg" alt="tir">
        </section>
    </main>
    <footer id="footer">
        <p>Stronę wykonał: XYZ</p>
    </footer>
</body>

</html>