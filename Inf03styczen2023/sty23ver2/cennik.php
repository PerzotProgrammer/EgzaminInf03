<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>

<body>
    <header id="banner">
        <h1>Pensjonat pod dobrym humorem</h1>
    </header>
    <section id="wrap">
        <section id="left">
            <a href="index.html">GŁÓWNA</a>
            <img src="1.jpg" alt="pokoje">
        </section>
        <section id="main">
            <a href="cennik.php">CENNIK</a>
            <table>
                <?php
                    $con = new mysqli("localhost", "root", "", "wynajem");
                    $query = "SELECT * FROM pokoje;";

                    $result = $con->query($query);

                    while($row = $result->fetch_array()) {
                        echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td></tr>";
                    }
                    $con->close();
                ?>
            </table>
        </section>
        <section id="right">
            <a href="kalkulator.html">KALKULATOR</a>
            <img src="3.jpg" alt="pokoje">
        </section>
    </section>
    <footer id="footer">
        <p>Stronę opracował: XYZ</p>
    </footer>
</body>

</html>