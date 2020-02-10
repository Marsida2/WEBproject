<?php
require 'includes/connection.php';

if(isset($_SESSION['id_perdorues'])){
	$id=$_SESSION['id_perdorues'];
	$query_kerkim_data= mysqli_query($connection, "select * from perdorues where id_perdorues='$id'");
	$perdorues=mysqli_fetch_array($query_kerkim_data);
}else header("Location: hyr.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>TALENTI<em>im</em></title>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/fonts/font-faces.css">
	<link rel="stylesheet" type="text/css" href="css/loggedIn.css">
	<script type="text/javascript" src="js/ngjyrosSearch.js"></script>


</head>
<body>

	<div class="top_bar">
		<div class="logo">
			<a href="indexIn.php">TALENTI<em>im</em></a>
		</div>

<!-- implementimi i search-it  -->
	<div class="search">
		<form action="kerkim.php" method="get" name="frmKerko">
			<input type="text" name="kerkim" placeholder="Kërko..." autocomplete="off" id="kerko_inputin">
			<button type="submit" class="btnKerkimi">
				<i class="fa fa-search fa-lg"></i>
			</button>
		</form>


	</div>


		<nav>
			<a href="anetareGrupi.php" id="grupi"><i class="fa fa-users fa-lg"></i></a>
			<a href="settings.php" id="settings"><i class="fa fa-cog fa-lg"></i></a>
			<a href="includes/logout.php" id="dil"><i class="fa fa-sign-out fa-lg"></i></i></a>
		</nav>

	</div>



	<div class="wrapper">
		


<!-- kolona e pare me te dhenat e perdoruesit -->
	<div class="teDhenaPersonale column">
		<a href="#"><img class="fotoProfili" src="foto/alfabeti/<?php echo $perdorues['fotoProfili']; ?>" alt="fotoja e profilit"></a>
		<p>
			<?php echo "<strong>". $perdorues['emri']." ".$perdorues['mbiemri']."</strong>" ?>
		</p>	
		<p>
			<?php echo "<strong>Username:</strong><br>".$perdorues['username']; ?>
		</p>
		<p>
			<?php echo "<strong>Email:</strong><br>".$perdorues['email']?>
		</p>		
		<p>
			<?php echo "<strong>Datëlindja:</strong><br>".$perdorues['datelindja']?>
		</p>
		<p>
			<?php 
				$query= mysqli_query($connection, "select emer_grupi, roli from perdorues inner join grupet on perdorues.id_grupi=grupet.id_grupi inner join roli on perdorues.id_roli=roli.id_roli where id_perdorues='$id'");
				$grupi_roli=mysqli_fetch_row($query);
			echo "<strong>Grupi:</strong><br>".$grupi_roli[0]?>
		</p>
		<p>
			<?php echo "<strong>Roli:</strong><br>".$grupi_roli[1]?>
		</p>
 	</div>