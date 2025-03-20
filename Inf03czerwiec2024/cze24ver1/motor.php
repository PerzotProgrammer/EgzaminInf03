<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Motocykle</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <img src="motor.png" alt="motocykl">
    <header id="banner">
        <h1>Motocykle - moja pasja</h1>
    </header>
    <main id="main">
        <section id="left">
            <h2>Gdzie pojechać?</h2>
            <dl>
                <?php
                    $con = new mysqli("localhost", "root", "", "motory");
                    $query = "SELECT nazwa, opis, poczatek, zrodlo FROM wycieczki INNER JOIN zdjecia ON wycieczki.zdjecia_id = zdjecia.id;";
                    $result = $con->query($query);
                    
                    while($row = $result->fetch_array()) {
                        echo "<dt>$row[0] rozpoczyna się w $row[2], <a href='./$row[3].jpg'>Zobacz zdjęcie</a></dt>";
                        echo "<dd>$row[1]</dd>";
                    }
                    
                ?>
            </dl>
        </section>
        <section id="right">
            <section id="rTop">
                <h2>Co kupić?</h2>
                <ol>
                    <li>Honda CBR125R</li>
                    <li>Yamaha YBR125</li>
                    <li>Honda VFR800i</li>
                    <li>Honda CBR1100XX</li>
                    <li>BMW R1200GS LC</li>
                </ol>
            </section>
            <section id="rBot">
                <h2>Statystyki</h2>
                <p>Wpisanych wycieczek:
                    <?php
                        $query = "SELECT COUNT(id) FROM wycieczki;";
                        $result = $con->query($query);
                        $row = $result->fetch_row();

                        echo "$row[0]";

                        $con->close();
                    ?>
                </p>
                <p>Urzytkowników formum: 200</p>
                <p>Przesłanych zdjęć: 1300</p>
            </section>
        </section>
    </main>
    <footer id="footer">
        <p>Stronę wykonał: XYZ</p>
    </footer>
</body>

</html>