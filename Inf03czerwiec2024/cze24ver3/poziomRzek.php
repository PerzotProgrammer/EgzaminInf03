<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Poziomy rzek</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header id="banner">
    <section class="wrap">    
        <section class="bannerBlock">
            <img src="obraz1.png" alt="Mapa Polski">
        </section>
        <section class="bannerBlock">
            <h1>Rzeki w województwie dolnośląskim</h1>
        </section>
    </section>
    <section id="nav">
        <form action="poziomRzek.php" method="POST">
            <input type="radio" id="rAll" name="opt" value="all">
            <label for="rAll" class="radioLabel">Wszystkie</label>
            <input type="radio" id="rWarning" name="opt" value="warning">
            <label for="rWarning" class="radioLabel">Ponad stan ostrzegawczy</label>
            <input type="radio" id="rAlarm" name="opt" value="alarm">
            <label for="rAlarm" class="radioLabel">Ponad stan alarmowy</label>
            <input type="submit" value="Pokaż">
        </form>
    </section>
    </header>
    <main class="wrap">
        <section id="left">
            <h3>Stany na dzień 2022-05-05</h3>
            <table>
                <tr><th>Wodomierz</th><th>Rzeka</th><th>Ostrzegawczy</th><th>Alarmowy</th><th>Aktualny</th></tr>
                <?php
                    $con = new mysqli("localhost", "root", "", "rzeki");
                    $query = "SELECT nazwa, rzeka, stanOstrzegawczy, stanAlarmowy, stanWody FROM wodowskazy INNER JOIN pomiary ON wodowskazy.id = pomiary.wodowskazy_id WHERE dataPomiaru = '2022-05-05'";
                    
                    switch($_POST["opt"]){
                        case "warning":
                            $query .= " AND stanWody > stanOstrzegawczy";
                            break;
                        case "alarm":
                            $query .= " AND stanWody > stanAlarmowy";
                            break;
                        default:
                            break;
                    }

                    $result = $con->query($query);
                    while($row = $result->fetch_array()){
                        echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td><td>{$row[4]}</td></tr>";
                    }
                ?>
            </table>
        </section>
        <section id="right">
            <h3>Informacje</h3>
            <ul>
                <li>Brak ostrzeżeń o burzach z gradem</li>
                <li>Smog w mieście Wrocław</li>
                <li>Silny wiatr w Karkonoszach</li>
            </ul>
            <h3>Średnie stany wód</h3>
            <?php
                $query = "SELECT dataPomiaru, AVG(stanWody) FROM pomiary GROUP BY dataPomiaru";

                $result = $con->query($query);
                $result = $con->query($query);
                while($row = $result->fetch_array()){
                    echo "<p>{$row[0]}: {$row[1]}</p>";
                }

                $con->close();
            ?>
            <a href="https://komunikaty.pl">Dowiedz się więcej</a>
            <img src="obraz2.jpg" alt="rzeka">
        </section>
    </main>
    <footer id="footer">
        <p>Stronę wykonał: XYZ</p>
    </footer>
</body>
</html>