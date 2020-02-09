<?php

if (isset($_GET['resetGrup'])) {
	extract($_GET);
	$query_reset="delete from perdorues where id_grupi=$resetGrup";
	$result=mysqli_query($connection, $query_reset);
}

?>