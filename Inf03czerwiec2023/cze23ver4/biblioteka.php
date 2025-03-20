<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="banner">
        <h1>Biblioteka w Książkowicach Wielkich</h1>
    </header>
    <main id="wrap">
        <section id="left">
            <h3>Polecamy dzieła autorów:</h3>
            <ol>
                <?php
                    $con = new mysqli("localhost", "root", "", "biblioteka");
                    $query = "SELECT imie, nazwisko FROM autorzy ORDER BY nazwisko ASC;";

                    $result = $con->query($query);

                    while($row = $result->fetch_array()) {
                        echo "<li>$row[0] $row[1]</li>";
                    }
                ?>
            </ol>
        </section>
        <section id="center">
            <h3>ul. Czytelnicza 25, Książkowice&nbsp;Wielkie</h3>
            <a href="mailto:sekretariat@biblioteka.pl">Napisz do nas</a><br>
            <img src="biblioteka.png" alt="książki">
        </section>
        <section id="right">
            <section id="rTop">
                <h3>Dodaj czytelnika</h3>
                <form action="./biblioteka.php" method="POST">
                    <label for="fName">imię: </label>
                    <input type="text" name="fName"><br>
                    <label for="sName">nazwisko: </label>
                    <input type="text" name="sName"><br>
                    <label for="idNumber">symbol: </label>
                    <input type="number" name="idNumber"><br>
                    <input type="submit" value="DODAJ">
                </form>
            </section>
            <section id="rBot">
                <?php

                    if(isset($_POST['fName']) && isset($_POST['sName']) && isset($_POST['idNumber'])) {
                        $fName = $_POST['fName'];
                        $sName = $_POST['sName'];
                        $idNumber = $_POST['idNumber'];
                        $query = "INSERT INTO czytelnicy(imie, nazwisko, kod) VALUES ('$fName', '$sName', $idNumber);";
                        $con->query($query);
                        echo "<p>Czytelnik $fName $sName został(a) dodany do bazy danych</p>";
                    }
                ?>
            </section>
        </section>
    </main>
    <footer id="footer">
        <p>Projekt strony: XYZ</p>
    </footer>
</body>
</html>