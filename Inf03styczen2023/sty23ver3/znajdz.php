<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>

<body>
    <div id="banner">
        <h1>Grupa Polskich Kwiaciarni</h1>
    </div>
    <div id="wrap">
        <div id="left">
            <h2>Menu</h2>
            <ol>
                <li><a href="index.html">Strona główna</a></li>
                <li><a href="https://www.kwiaty.pl">Rozpoznaj kwiaty</a></li>
                <li><a href="znajdz.php">Znajdź kwiaciarnię</a>
                    <ul>
                        <li>w Warszawie</li>
                        <li>w Malborku</li>
                        <li>w Poznaniu</li>
                    </ul>
                </li>
            </ol>
        </div>
        <div id="right">
            <h2>Znajdź kwiaciarnię</h2>
            <form action="znajdz.php" method="POST">
                <label for="city">Podaj nazwę miasta:</label>
                <input type="text" name="city" id="city">
                <input type="submit" value="SPRAWDŹ">
            </form>
            <?php
                if (isset($_POST["city"])):

                $city = $_POST["city"];
                $con = new mysqli("localhost", "root", "", "kwiaciarnia");

                $query = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto LIKE '$city'";
                $result = $con->query($query);

                while ($row = $result->fetch_assoc()) echo "<h3>{$row['nazwa']}, {$row['ulica']}</h3>";
            
                endif;
            ?>
        </div>
    </div>
    <div id="footer">
        <p>Stronę wykonał: 012345678910</p>
    </div>
</body>

</html>