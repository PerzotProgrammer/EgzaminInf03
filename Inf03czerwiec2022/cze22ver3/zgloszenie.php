<?php
    $con = new mysqli('localhost', 'root', '', 'wedkarstwo');

	$lowisko = $_POST['lowisko'];
	$data = $_POST['data'];
	$sedzia = $_POST['sedzia'];

	$query = "INSERT INTO zawody_wedkarskie(Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES (2, $lowisko, '$data', '$sedzia')";
	$con->query($query);
    $con->close();
?>