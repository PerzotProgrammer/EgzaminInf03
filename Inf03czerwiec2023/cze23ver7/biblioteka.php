<!doctype html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="banner">
    <h1>Biblioteka w Książkowicach Małych</h1>
</div>
<div id="wrapper">
    <div id="left">
        <h4>Dodaj czytelnika</h4>
        <form action="biblioteka.php" method="post">
            <label for="fName">imię: </label>
            <input type="text" name="fName" id="fName" required>
            <br>
            <label for="sName">nazwisko: </label>
            <input type="text" name="sName" id="sName" required>
            <br>
            <label for="symbol">symbol: </label>
            <input type="number" name="symbol" id="symbol" required>
            <br>
            <input type="submit" name="submit" value="AKCEPTUJ">
        </form>
        <?php
            $con = mysqli_connect("localhost", "root", "", "biblioteka");
            if (isset($_POST["submit"])) {
                $fName = $_POST["fName"];
                $sName = $_POST["sName"];
                $symbol = $_POST["symbol"];
                $query = "insert into czytelnicy(imie, nazwisko, kod) values ('$fName', '$sName', '$symbol');";
                mysqli_query($con, $query);
                echo "<p>Dodano czytelnika $fName $sName</p>";
            }
        ?>
    </div>
    <div id="middle">
        <img src="biblioteka.png" alt="biblioteka">
        <h6>ul. Czytelników 15; Książkowice Małe</h6>
        <a href="mailto:biuro@bib.pl">Czy masz jakieś uwagi?</a>
    </div>
    <div id="right">
        <h4>Nasi czytelnicy:</h4>
        <ol>
            <?php
                $con = mysqli_connect("localhost", "root", "", "biblioteka");
                $query = "select imie, nazwisko from czytelnicy order by nazwisko;";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_row($result)) {
                    echo "<li>$row[0] $row[1]</li>";
                }
                mysqli_close($con);
            ?>
        </ol>
    </div>
</div>
<div id="footer">
    <p>Projekt witryny: XYZ</p>
</div>
</body>
</html>