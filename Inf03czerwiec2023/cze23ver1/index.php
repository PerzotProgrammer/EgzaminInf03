<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Sklep dla uczniów</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<div id="banner">
    <h1>Dzisiejsze promocje naszego sklepu</h1>
</div>
<div id="wrapper">
    <div id="left">
        <h2>Taniej o 30%</h2>
        <ol>
            <?php
                $con = mysqli_connect("localhost", "root", "", "sklep");
                $query = 'select nazwa from towary where promocja = 1;';
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<li>$row[0]</li>";
                }
            ?>
        </ol>
    </div>
    <div id="middle">
        <h2>Sprawdź cenę</h2>
        <form action="index.php" method="post">
            <select name="list" id="list">
                <option value="1">Gumka do mazania</option>
                <option value="2">Cienkopis</option>
                <option value="3">Pisaki 60 szt.</option>
                <option value="4">Markery 4 szt.</option>
            </select>
            <input type="submit" name="submit" value="SPRAWDŹ">
        </form>
        <div id="output">
            <?php
                if (isset($_POST['submit'])) {
                    $id = $_POST['list'];
                    $q = "select cena from towary where id = '$id';";
                    $res = mysqli_query($con, $q);
                    while ($row = mysqli_fetch_array($res)) {
                        echo "cena regularna: $row[0]</br>";
                        $cena = round($row[0] * 0.7, 2);
                        echo "cena w promocji 30%: $cena";
                    }
                }
                mysqli_close($con);
            ?>
        </div>
    </div>
    <div id="right">
        <h2>Kontakt</h2>
        <p>e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
        <img src="promocja.png" alt="promocja">
    </div>
</div>
<div id="footer">
    <h4>Autor strony: XYZ</h4>
</div>
</body>
</html>