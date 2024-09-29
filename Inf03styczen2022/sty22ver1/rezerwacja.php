<?php
    $data = $_POST["data"];
    $osoby = $_POST["osoby"];
    $telefon = $_POST["telefon"];

    $con = mysqli_connect("localhost","root","","baza");
    if(!$con) {
        echo "Nie można połączyć z bazą!";
        exit;
    }
    $query = "INSERT INTO rezerwacje(data_rez,liczba_osob,telefon) VALUES(".$data.",$osoby,".$telefon.")";
    mysqli_query($con, $query);
    echo "Dodano rezerwacje do bazy";
    mysqli_close($con);