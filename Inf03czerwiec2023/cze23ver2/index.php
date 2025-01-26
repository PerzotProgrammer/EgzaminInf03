<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="banner">
        <h1>Hurtownia z najlepszymi cenami</h1>
    </div>
    <div id="wrap">
        <div id="left">
            <h2>Nasze ceny</h2>
            <table>
                <?php
                    $con = new mysqli("localhost", "root", "", "sklep");
                    $query = "SELECT nazwa, cena FROM towary LIMIT 4";
                    
                    $result = $con->query($query);
                    while($row = $result->fetch_array()) {
                        echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td></tr>";
                    }
                ?>
            </table>
        </div>
        <div id="center">
            <h2>Koszt zakupów</h2>
            <form action="index.php" method="POST">
                <label for="list">wybierz artykuł:</label>
                <select name="list" id="list">
                    <option value="1">Zeszyt 60 kratek</option>
                    <option value="2">Zeszyt 32 kratki</option>
                    <option value="3">Cyrkiel</option>
                    <option value="4">Linijka 30 cm</option>
                </select>
                <br>
                <label for="num">Liczba sztuk:</label>
                <input type="number" id="num" name="num">
                <br>
                <input type="submit" value="OBLICZ">
            </form>
            <?php
                $list = $_POST["list"];
                $num = $_POST["num"];

                $query = "SELECT cena FROM towary WHERE id = '{$list}'";
                $result = $con->query($query);
                $row = $result->fetch_array();
                $out = $row[0] * $num;
                echo "<p>wartość zakupów: {$out}</p>";
                
                $con->close();
            ?>
        </div>
        <div id="right">
            <h2>Kontakt</h2>
            <img src="zakupy.png" alt="hurtownia">
            <p>e-mail: <a href="mailto:hurt@poczta2.pl">hurt@poczta2.pl</a></p>
        </div>
    </div>
    <div id="footer">
        <h4>Witrynę wykonał: XYZ</h4>
    </div>
</body>
</html>