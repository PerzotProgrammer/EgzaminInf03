<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Hodowla świnek morskich</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header id="banner">
        <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
    </header>
    <section id="right">
        <h3>Poznaj wszystkie rasy świnek morskich</h3>
        <ol>
            <?php
            $con = new mysqli("localhost", "root", "", "hodowla");
            $query = "SELECT rasa FROM rasy;";

            $result = $con->query($query);
            while($row = $result->fetch_array()) {
                echo "<li>$row[0]</li>";
            }
            ?>
        </ol>
    </section>
    <section id="lTop">
        <a href="peruwianka.php">Rasa Peruwianka</a>
        <a href="american.php">Rasa American</a>
        <a href="crested.php">Rasa Crested</a>
    </section>
    </section>
    <section id="lMain">
        <img src="peruwianka.jpg" alt="Świnka morska rasy peruwianka">
            <?php
            $query = "SELECT DISTINCT data_ur, miot, rasa FROM swinki INNER JOIN rasy ON swinki.rasy_id = rasy.id WHERE rasy.id = 1;";

            $result = $con->query($query);
            $data = $result->fetch_row();

            echo "<h2>Rasa: $data[2]</h2>";
            echo "<p>Data urodzenia: $data[0]</p>";
            echo "<p>Oznaczenie miotu: $data[1]</p>";
            ?>
        <hr>
        <h2>Świnki w tym miocie</h2>
            <?php
            $query = "SELECT imie, cena, opis FROM swinki WHERE id = 1;";

            $result = $con->query($query);
            while($row = $result->fetch_array()) {
                echo "<h3>$row[0] - $row[1]</h3>";
                echo "<p>$row[2]</p>";
            }
            $con->close();
            ?>
    </section>
    <footer id="footer">
        <p>Stronę wykonał: XYZ</p>
    </footer>
</body>

</html>