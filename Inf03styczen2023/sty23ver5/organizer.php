<!doctype html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
<header>
    <section id="baner1">
        <h1>Organizer: SIERPIEŃ</h1>
    </section>
    <section id="baner2">
        <form action="organizer.php" method="post">
            <label for="event">Zapisz wydarzenie:</label>
            <input type="text" id="event" name="event">
            <input type="submit" value="OK">
        </form>
    </section>
    <section id="baner3">
        <img src="logo2.png" alt="sierpień">
    </section>
</header>
<main id="main">
    <?php
        $con = mysqli_connect("localhost", "root", "", "kalendarz");
        if (isset($_POST["event"])) {
            $event = $_POST["event"];
            $query = "update zadania set wpis='$event' where month(dataZadania) = 8 and day(dataZadania) = 9";
            mysqli_query($con, $query);
        }
        $query = "select dataZadania, wpis from zadania where month(dataZadania) = 8";
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($result)) {
            echo "<div class='calendar'><h5>" . $row['dataZadania'] . "</h5><p>" . $row['wpis'] . "</p></div>";
        }
        mysqli_close($con);
    ?>
</main>
<footer id="footer">
    <p>Stronę wykonał: xyz</p>
</footer>
</body>
</html>