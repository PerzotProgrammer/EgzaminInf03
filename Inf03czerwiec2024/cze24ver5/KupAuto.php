<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Komis aut</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header id="banner">
        <h1><em>KupAuto!</em> Internetowy Komis Samochodowy</h1>
    </header>
    <main>
        <section id="block1">
            <?php
                $con = new mysqli("localhost", "root", "", "kupauto");
                $query = 'SELECT model, rocznik, przebieg, paliwo, cena, zdjecie FROM samochody WHERE id = 10;';

                $result = $con->query($query);
                $row = $result->fetch_row();
            ?>

            <img src="<?php echo $row[5]?>" alt="oferta dnia">
            <h4>Oferta Dnia: Toyota <?php echo $row[0]?></h4>
            <p>Rocznik: <?php echo $row[1]?>, Przebieg: <?php echo $row[2]?>, Rodzaj paliwa: <?php echo $row[3]?>,</p>
            <h4>Cena: <?php echo $row[4]?></h4>

        </section>
        <section id="block2">
            <h2>Oferty wyróżnione</h2>
            <?php
                $query = 'SELECT nazwa, model, rocznik, cena, zdjecie FROM marki INNER JOIN samochody ON marki.id = samochody.marki_id WHERE wyrozniony = 1 LIMIT 4;';
                
                $result = $con->query($query);

                while($row = $result->fetch_row()) {
                    echo "<section class='offer'>";
                    echo "<img src={$row[4]} alt={$row[1]}>";
                    echo "<h4>{$row[0]} {$row[1]}</h4>";
                    echo "<p>Rocznik: {$row[2]}</p>";
                    echo "<h4>Cena: {$row[3]}</h4>";
                    echo "</section>";
                }
            ?>
            
            

        </section>
        <section id="block3">
            <h2>Wybierz markę</h2>
            <form action="KupAuto.php" method="post">
                <select name="marka" id="marka">
                    <?php
                        $query = 'SELECT nazwa FROM marki;';

                        $result = $con->query($query);

                        while($row = $result->fetch_row()) {
                            echo "<option value={$row[0]}>{$row[0]}</option>";
                        }
                    ?>
                </select>
                <input type="submit" value="Wyszukaj">
            </form>
            <?php
                if (isset($_POST["marka"])) {
                    $marka = $_POST["marka"];
                    $query = "SELECT model, cena, zdjecie FROM samochody INNER JOIN marki ON samochody.marki_id = marki.id WHERE nazwa LIKE '{$marka}';";

                    $result = $con->query($query);

                     while($row = $result->fetch_row()) {
                        echo "<section class='offer'>";
                        echo "<img src={$row[2]} alt={$row[0]}>";
                        echo "<h4>{$marka} {$row[0]}</h4>";
                        echo "<h4>Cena: {$row[1]}</h4>";
                        echo "</section>";
                    }
                }

                $con->close();
            ?>
        </section>
    </main>
    <footer id="footer">
        <p>Stronę wykonał: XYZ</p>
        <p><a href="http://firmy.pl/komis">Znajdź nas także</a></p>
    </footer>
</body>

</html>