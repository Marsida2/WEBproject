<?php
require 'includes/connection.php';

if(!isset($_SESSION['shporta']))
    $_SESSION['shporta'] = array();
require 'includes/shtoShporte.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>TALENTIim</title>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/fonts/font-faces.css">
	<link rel="stylesheet" type="text/css" href="css/loggedIn.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript" src="js/mouseMove.js"></script>
	<script type="text/javascript" src="js/shikoTeGjitha.js"></script>

</head>
<body>

	<div class="top_bar">
		<div class="logo">
			<a href="index.php">TALENTI<em>im<em></a>
		</div>


		<nav>
			<a href="shporta.php" id="shporta"><i class="fa fa-shopping-cart  fa-lg"></i></a>
			<a href="hyr.php" id="hyr"><i class="fa fa-sign-in fa-lg"></i></a>
		</nav>


	</div>