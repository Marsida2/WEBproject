<?php
require 'includes/connection.php';

if(isset($_SESSION['id_perdorues'])){
	$id=$_SESSION['id_perdorues'];
	$query_kerkim_data= mysqli_query($connection, "select * from perdorues where id_perdorues='$id'");
	$perdorues=mysqli_fetch_array($query_kerkim_data);
	$_SESSION['perdAk']=$perdorues;
}else header("Location: hyr.php");

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
</head>
<body>

	<div class="top_bar">
		<div class="logo">
			<a href="indexIn.php">EmerKampi</a>
		</div>

<!-- implementimi i search-it  -->
	<div class="search">
		<form action="#" method="get" name="frmKerko">
			<input type="text" name="kerkim" placeholder="Kerko..." autocomplete="off" id="kerko_inputin">
			<button type="submit" class="btnKerkimi">
				<!-- ketu do vendos nje fontawesome -->
				<i class="fa fa-search fa-lg"></i>
			</button>
		</form>


	</div>


		<nav>
			<a href="#" id="emriNav"> <?php echo $perdorues['username'] ?></a>
			<a href="#" id="grupi"><i class="fa fa-users fa-lg"></i></a>
			<a href="#" id="settings"><i class="fa fa-cog fa-lg"></i></a>
			<a href="includes/logout.php" id="dil"><i class="fa fa-share-square-o fa-lg"></i></a>
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
			<?php echo $perdorues['email']?>
		</p>	
		<p>
			<?php echo $perdorues['emri']." ".$perdorues['mbiemri'] ?>
		</p>	
 	</div>



<!-- kolona e dyte me vendin e postimeve -->
	<div class="postimet column ">
		<h4><em><strong>Rezultatet e kerkimit</strong></em></h4>
		<br>

		<?php 
		$kerkim=$_GET['kerkim'];
		$kerkim=trim($kerkim);
		$kerkim=explode(" ", $kerkim);
		
		$kusht_query="";
		for ($i=0; $i<count($kerkim) ; $i++) { 
			if($i!=count($kerkim)-1)
				$kusht_query.="emri like '%".$kerkim[$i]."%' or mbiemri like '%".$kerkim[$i]."%' or emer_grupi like '%".$kerkim[$i]."%' or ";
			else $kusht_query.="emri like '%".$kerkim[$i]."%' or mbiemri like '%".$kerkim[$i]."%' or emer_grupi like '%".$kerkim[$i]."%'";
		}
		
		$query_kerkimi="select id_perdorues, fotoProfili, username, email, emer_grupi from perdorues inner join grupet on perdorues.id_grupi=grupet.id_grupi where $kusht_query order by username";
		$result=mysqli_query($connection, $query_kerkimi);
		?>

		<table class="tabeleRezultatesh">
			<thead>	
			</thead>
		
			<tbody>
				<?php
					while($row=mysqli_fetch_row($result)){
				?>
				<tr>
					<td><?php echo "<img src='foto/alfabeti/$row[1]' class='miniFoto'>"; ?></td>
					<td><?php echo "$row[2]"; ?></td>
					<td><?php echo "$row[3]"; ?></td>
					<td><?php echo "$row[4]"; ?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>

		
	<!-- divi ku do shfaqet secili nga rezutatet e gjetura -->

	</div><!-- mbyllja e kolones gjigande te posteve -->

	</div><!--wrapperi-->


</body>
</html> 