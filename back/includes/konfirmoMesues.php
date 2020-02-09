<?php

if (isset($_GET['idKonfirmo'])) {
	$query="update perdorues set id_roli=2 where id_perdorues='".$_GET['idKonfirmo']."'";
	$result=mysqli_query($connection, $query);
}

if (isset($_GET['idAnullo'])) {
	$query="update perdorues set id_roli=1 where id_perdorues='".$_GET['idAnullo']."'";
	$result=mysqli_query($connection, $query);
}

?>