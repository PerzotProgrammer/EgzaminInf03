<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <title>Galeria</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header id="banner">
        <h1>Zdjęcia</h1>
    </header>
    <main id="main">
        <section id="left">
            <h2>Tematy zdjęć</h2>
            <ol>
                <li>Zwierzęta</li>
                <li>Krajobrazy</li>
                <li>Miasta</li>
                <li>Przyroda</li>
                <li>Samochody</li>
            </ol>
        </section>
        <section id="center">
            <?php
                $con = new mysqli("localhost", "root", "", "galeria");

                $query = "SELECT plik, tytul, polubienia, imie, nazwisko FROM zdjecia INNER JOIN autorzy ON autorzy.id = zdjecia.autorzy_id ORDER BY nazwisko ASC;";

                $result = $con->query($query);

                while($row = $result->fetch_array()) {
                    echo "<div class='generated'>";
                    echo "<img src='$row[0]' alt='zdjęcie'>";
                    echo "<h3>$row[1]</h3>";
                    $str = "<p>Autor: $row[3] $row[4]";
                    if ($row[2] > 40) $str .= ".<br> Wiele osób polubiło ten obraz";
                    echo $str."</p>";
                    echo "<a href='$row[0]' download>Pobierz</a>";
                    echo "</div>";
                }
            ?>

        </section>
        <section id="right">
            <h2>Najbardziej lubiane</h2>
            <?php
                $query = "SELECT tytul, plik FROM zdjecia WHERE polubienia >= 100;";

                $result = $con->query($query);

                $row = $result->fetch_row();

                echo "<img src='$row[1]' alt='$row[0]'>";

                $con->close();
            ?>
            <strong>Zobacz wszystkie zdjęcia</strong>
        </section>
    </main>
    <footer id="footer">
        <h5>Stronę wykonał: XYZ</h5>
    </footer>
</body>

</html>