<?php
ob_start(); //turns on output buffering
session_start();

$timezone= date_default_timezone_set("Europe/London");//qe te llogarisim para sa oresh eshte bere nje postim


$connection= mysqli_connect('localhost', 'root', '', 'kampi');
	if(!$connection)
		die ("Lidhja me databazen deshtoi.");

?>