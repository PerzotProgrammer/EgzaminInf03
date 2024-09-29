<!doctype html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>

<div id="bannerWrap">
    <div id="banner1">
        <img src="logo1.png" alt="lipiec">
    </div>
    <div id="banner2">
        <h1>TERMINARZ</h1>
        <p>najbliższe zadania:
            <?php
                $con = mysqli_connect("localhost", "root", "", "terminarz");
                $query = "select distinct wpis from zadania where day(dataZadania) between 1 and 7 and month(dataZadania) like 7 and year(dataZadania) like 2020 and wpis not like '';";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                    echo " " . $row['wpis'] . ";";
                }
                echo "</p>";
            ?>
    </div>
</div>
<div id="main">
    <?php
        $query = "select dataZadania, wpis from zadania where month(dataZadania) = 7;";
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($result)) {
            echo "<div class='calendar'><h6>" . $row["dataZadania"] . "</h6><p>" . $row["wpis"] . "</p></div>";
        }
    ?>
</div>
<div id="footer">
    <a href="sierpien.html">Terminarz na sierpień</a>
    <p>Stronę wykonał: XYZ</p>
</div>
</body>
</html>