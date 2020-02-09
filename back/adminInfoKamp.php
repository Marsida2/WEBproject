<?php
require 'includes/connection.php';

if(isset($_SESSION['id_perdorues'])){
	$id=$_SESSION['id_perdorues'];
	$query_kerkim_data= mysqli_query($connection, "select * from perdorues where id_perdorues='$id'");
	$perdorues=mysqli_fetch_array($query_kerkim_data);

}else header("Location: hyr.php");

require 'includes/shtoPostim.php';
require 'includes/shtoKoment.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>EmerKampi</title>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/fonts/font-faces.css">
	<link rel="stylesheet" type="text/css" href="css/loggedIn.css">
	<script type="text/javascript" src="js/shtoPost.js"></script>

</head>
<body>

	<div class="top_bar">
		<div class="logo">
			<a href="indexIn.php">EmerKampi</a>
		</div>

<!-- implementimi i search-it  -->
	<div class="search">
		<form action="kerkim.php" method="get" name="frmKerko">
			<input type="text" name="kerkim" placeholder="Kerko..." autocomplete="off" id="kerko_inputin">
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
			<?php echo $perdorues['emri']." ".$perdorues['mbiemri'] ?>
		</p>	
		<p>
			<?php echo "<strong>Perdoruesi:</strong><br>".$perdorues['username']; ?>
		</p>
		<p>
			<?php echo "<strong>Email:</strong><br>".$perdorues['email']?>
		</p>		
		<p>
			<?php echo "<strong>Datelindja:</strong><br>".$perdorues['datelindja']?>
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



	<div class="postimet column">
		<h2>Te dhena nga perdoruesit</h2>
		<!--printimi i numrit te grupeve-->
	<p>
		Numri i te regjistrurve sipas grupeve: 
		
			<?php
				$query_num="select grupet.id_grupi, emer_grupi, count(perdorues.id_grupi) from perdorues inner join grupet on perdorues.id_grupi=grupet.id_grupi group by grupet.id_grupi ";
				$result=mysqli_query($connection, $query_num);
				$num=mysqli_num_rows($result);


				echo "<table border='1'><tr><thead><th>Grupi</th><th>Anetaret aktuale</th></thead><tbody>";
				while($row=mysqli_fetch_array($result))
					echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
				echo "</tbody></table>";
			?>
				</p>

				<br>

				<p>Numri i regjistrimeve sipas gjinise:</p>

				<p>
					<?php
						$query_num="select gjinia, count(id_perdorues) from perdorues group by gjinia ";
						$result=mysqli_query($connection, $query_num);
						while($row=mysqli_fetch_array($result))
							echo "Gjinia ".$row[0].": ".$row[2]."persona<br>";
					?>
				</p>


	</div>

</div><!--wrapperi-->

</body>
</html> 